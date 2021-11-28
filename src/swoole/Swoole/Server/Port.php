<?php

declare(strict_types=1);
/**
 * This file is part of OpenSwoole IDE Helper.
 * @link     https://www.swoole.co.uk
 * @contact  hello@swoole.co.uk
 * @license  https://github.com/openswoole/library/blob/master/LICENSE
 */
namespace Swoole\Server;

class Port
{
    public $host;

    public $port = 0;

    public $type = 0;

    public $sock = -1;

    public $setting;

    public $connections;

    private $onConnect;

    private $onReceive;

    private $onClose;

    private $onPacket;

    private $onBufferFull;

    private $onBufferEmpty;

    private $onRequest;

    private $onHandShake;

    private $onOpen;

    private $onMessage;

    private $onDisconnect;

    private function __construct()
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
     * @param mixed $event_name
     * @return mixed
     */
    public function on($event_name, callable $callback)
    {
    }

    /**
     * @param mixed $event_name
     * @return mixed
     */
    public function getCallback($event_name)
    {
    }

    /**
     * @return mixed
     */
    public function getSocket()
    {
    }
}
