<?php

declare(strict_types=1);
/**
 * This file is part of OpenSwoole IDE Helper.
 * @link     https://openswoole.com
 * @contact  hello@openswoole.com
 * @license  https://github.com/openswoole/library/blob/master/LICENSE
 */
namespace Swoole\FastCGI;

use InvalidArgumentException;
use Swoole\FastCGI\Record\EndRequest;
use Swoole\FastCGI\Record\Stderr;
use Swoole\FastCGI\Record\Stdout;

class Response extends Message
{
    public function __construct(array $records = [])
    {
        if (!static::verify($records)) {
            throw new InvalidArgumentException('Bad records');
        }
        $body  = '';
        $error = '';
        foreach ($records as $record) {
            if ($record instanceof Stdout) {
                if ($record->getContentLength() > 0) {
                    $body .= $record->getContentData();
                }
            } elseif ($record instanceof Stderr) {
                if ($record->getContentLength() > 0) {
                    $error .= $record->getContentData();
                }
            }
        }
        $this->withBody($body)->withError($error);
    }

    public static function verify(array $records): bool
    {
        return !empty($records) && $records[count($records) - 1] instanceof EndRequest;
    }
}
