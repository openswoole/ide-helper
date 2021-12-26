<?php

declare(strict_types=1);
/**
 * This file is part of OpenSwoole IDE Helper.
 * @link     https://openswoole.com
 * @contact  hello@openswoole.com
 * @license  https://github.com/openswoole/library/blob/master/LICENSE
 */
namespace Swoole;

class Runtime
{
    /**
     * @param bool $enable [optional] = true
     * @param int $flags [optional] = \SWOOLE_HOOK_ALL
     */
    public static function enableCoroutine(bool $enable = true, int $flags = \SWOOLE_HOOK_ALL): void
    {
    }

    public static function getHookFlags(): int
    {
    }

    /**
     * @param int $flags [optional] = \SWOOLE_HOOK_ALL
     */
    public static function setHookFlags(int $flags = \SWOOLE_HOOK_ALL): void
    {
    }
}
