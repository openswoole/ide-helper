<?php

declare(strict_types=1);
/**
 * This file is part of OpenSwoole IDE Helper.
 * @link     https://openswoole.com
 * @contact  hello@openswoole.com
 * @license  https://github.com/openswoole/library/blob/master/LICENSE
 */
namespace Swoole\Coroutine;

class MySQL
{
    public $serverInfo;

    public $sock;

    public $connected;

    public $connect_errno;

    public $connect_error;

    public $affected_rows;

    public $insert_id;

    public $error;

    public $errno;

    public function __construct()
    {
    }

    public function __destruct()
    {
    }

    /**
     * @return mixed
     */
    public function getDefer()
    {
    }

    /**
     * @param mixed $defer [optional]
     * @return mixed
     */
    public function setDefer($defer)
    {
    }

    /**
     * @param array $server_config [optional]
     * @return mixed
     */
    public function connect(array $server_config)
    {
    }

    /**
     * @param mixed $sql [required]
     * @param mixed $timeout [optional]
     * @return mixed
     */
    public function query($sql, $timeout)
    {
    }

    /**
     * @return mixed
     */
    public function fetch()
    {
    }

    /**
     * @return mixed
     */
    public function fetchAll()
    {
    }

    /**
     * @return mixed
     */
    public function nextResult()
    {
    }

    /**
     * @param mixed $query [required]
     * @param mixed $timeout [optional]
     * @return mixed
     */
    public function prepare($query, $timeout)
    {
    }

    /**
     * @return mixed
     */
    public function recv()
    {
    }

    /**
     * @param mixed $timeout [optional]
     * @return mixed
     */
    public function begin($timeout)
    {
    }

    /**
     * @param mixed $timeout [optional]
     * @return mixed
     */
    public function commit($timeout)
    {
    }

    /**
     * @param mixed $timeout [optional]
     * @return mixed
     */
    public function rollback($timeout)
    {
    }

    /**
     * @return mixed
     */
    public function close()
    {
    }
}
