<?php

declare(strict_types=1);
/**
 * This file is part of OpenSwoole IDE Helper.
 * @link     https://openswoole.com
 * @contact  hello@openswoole.com
 * @license  https://github.com/openswoole/library/blob/master/LICENSE
 */
namespace Swoole\Redis;

class Server extends \Swoole\Server
{
    public const NIL = 1;

    public const ERROR = 0;

    public const STATUS = 2;

    public const INT = 3;

    public const STRING = 4;

    public const SET = 5;

    public const MAP = 6;

    /**
     * @param string $command [required]
     * @param callable $callback [required]
     */
    public function setHandler(string $command, callable $callback): void
    {
    }

    /**
     * @param string $command [required]
     */
    public function getHandler(string $command)
    {
    }

    /**
     * @param int $type [required]
     * @param mixed $value [optional] = null
     */
    public static function format(int $type, $value = null)
    {
    }
}
