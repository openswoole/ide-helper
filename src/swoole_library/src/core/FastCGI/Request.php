<?php

declare(strict_types=1);
/**
 * This file is part of OpenSwoole IDE Helper.
 * @link     https://openswoole.com
 * @contact  hello@openswoole.com
 * @license  https://github.com/openswoole/library/blob/master/LICENSE
 */
namespace Swoole\FastCGI;

use Swoole\FastCGI;
use Swoole\FastCGI\Record\BeginRequest;
use Swoole\FastCGI\Record\Params;
use Swoole\FastCGI\Record\Stdin;

class Request extends Message
{
    protected bool $keepConn = false;

    public function __toString(): string
    {
        $body              = $this->getBody();
        $beginRequestFrame = new BeginRequest(FastCGI::RESPONDER, $this->keepConn ? FastCGI::KEEP_CONN : 0);
        $paramsFrame       = new Params($this->getParams());
        $paramsEofFrame    = new Params();
        if (empty($body)) {
            $message = "{$beginRequestFrame}{$paramsFrame}{$paramsEofFrame}}";
        } else {
            $stdinList = [];
            while (true) {
                $stdinList[] = $stdin = new Stdin($body);
                $stdinLength = $stdin->getContentLength();
                if ($stdinLength === strlen($body)) {
                    break;
                }
                $body = substr($body, $stdinLength);
            }
            $stdinList[] = new Stdin();
            $stdin       = implode($stdinList);
            $message     = "{$beginRequestFrame}{$paramsFrame}{$paramsEofFrame}{$stdin}}";
        }
        return $message;
    }

    public function getKeepConn(): bool
    {
        return $this->keepConn;
    }

    public function withKeepConn(bool $keepConn): self
    {
        $this->keepConn = $keepConn;
        return $this;
    }
}
