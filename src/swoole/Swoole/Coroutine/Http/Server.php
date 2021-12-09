<?php

declare(strict_types=1);
/**
 * This file is part of OpenSwoole IDE Helper.
 * @link     https://www.swoole.co.uk
 * @contact  hello@swoole.co.uk
 * @license  https://github.com/openswoole/library/blob/master/LICENSE
 */
namespace Swoole\Coroutine\Http;

final class Server
{
    public $fd;

    public $host;

    public $port;

    public $ssl;

    public $settings;

    public $errCode;

    public $errMsg;

    /**
     * @param mixed $host [required]
     * @param mixed $port [optional]
     * @param mixed $ssl [optional]
     * @param mixed $reuse_port [optional]
     */
    public function __construct($host, $port, $ssl, $reuse_port)
    {
    }

    public function __destruct()
    {
    }

    /**
     * @param array $settings [required]
     * @return mixed
     */
    public function set(array $settings)
    {
    }

    /**
     * @param mixed $pattern [required]
     * @param callable $callback [required]
     * @return mixed
     */
    public function handle($pattern, callable $callback)
    {
    }

    /**
     * @return mixed
     */
    public function start()
    {
    }

    /**
     * @return mixed
     */
    public function shutdown()
    {
    }

    /**
     * @return mixed
     */
    private function onAccept()
    {
    }
}
