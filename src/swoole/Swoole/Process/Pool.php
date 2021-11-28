<?php

declare(strict_types=1);
/**
 * This file is part of OpenSwoole IDE Helper.
 * @link     https://www.swoole.co.uk
 * @contact  hello@swoole.co.uk
 * @license  https://github.com/openswoole/library/blob/master/LICENSE
 */
namespace Swoole\Process;

class Pool
{
    public $master_pid = -1;

    public $workers;

    public function __construct($worker_num, $ipc_type = null, $msgqueue_key = null, $enable_coroutine = null)
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
     * @param mixed|null $worker_id
     * @return mixed
     */
    public function getProcess($worker_id = null)
    {
    }

    /**
     * @param mixed $host
     * @param mixed|null $port
     * @param mixed|null $backlog
     * @return mixed
     */
    public function listen($host, $port = null, $backlog = null)
    {
    }

    /**
     * @param mixed $data
     * @return mixed
     */
    public function write($data)
    {
    }

    /**
     * @return mixed
     */
    public function detach()
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
    public function stop()
    {
    }

    /**
     * @return mixed
     */
    public function shutdown()
    {
    }
}
