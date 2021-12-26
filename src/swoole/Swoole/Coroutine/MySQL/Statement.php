<?php

declare(strict_types=1);
/**
 * This file is part of OpenSwoole IDE Helper.
 * @link     https://openswoole.com
 * @contact  hello@openswoole.com
 * @license  https://github.com/openswoole/library/blob/master/LICENSE
 */
namespace Swoole\Coroutine\MySQL;

class Statement
{
    public $id;

    public $affected_rows;

    public $insert_id;

    public $error;

    public $errno;

    /**
     * @param mixed $params [optional]
     * @param mixed $timeout [optional]
     * @return mixed
     */
    public function execute($params, $timeout)
    {
    }

    /**
     * @param mixed $timeout [optional]
     * @return mixed
     */
    public function fetch($timeout)
    {
    }

    /**
     * @param mixed $timeout [optional]
     * @return mixed
     */
    public function fetchAll($timeout)
    {
    }

    /**
     * @param mixed $timeout [optional]
     * @return mixed
     */
    public function nextResult($timeout)
    {
    }

    /**
     * @param mixed $timeout [optional]
     * @return mixed
     */
    public function recv($timeout)
    {
    }

    /**
     * @return mixed
     */
    public function close()
    {
    }
}
