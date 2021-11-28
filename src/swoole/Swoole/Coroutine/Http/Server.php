<?php

declare(strict_types=1);
/**
 * This file is part of OpenSwoole IDE Helper.
 * @link     https://www.swoole.co.uk
 * @contact  hello@swoole.co.uk
 * @license  https://github.com/openswoole/library/blob/master/LICENSE
 */
namespace Swoole\Coroutine\Http;

class Server
{
    public $fd = -1;

    public $host;

    public $port = -1;

    public $ssl = false;

    public $settings;

    public $errCode = 0;

    public $errMsg = '';

    public function __construct($host, $port = null, $ssl = null, $reuse_port = null)
    {
    }

    public function __destruct()
    {
    }

    /**
     * @return mixed
     */
    public function set(array $settings)
    {
    }

    /**
     * @param mixed $pattern
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
