<?php

declare(strict_types=1);
/**
 * This file is part of OpenSwoole IDE Helper.
 * @link     https://openswoole.com
 * @contact  hello@openswoole.com
 * @license  https://github.com/openswoole/library/blob/master/LICENSE
 */
namespace Swoole;

class Lock
{
    public const FILELOCK = 2;

    public const MUTEX = 3;

    public const SEM = 4;

    public const RWLOCK = 1;

    public $errCode;

    /**
     * @param int $type [optional] = \SWOOLE_MUTEX
     * @param string $lockFile [optional] = ''
     */
    public function __construct(int $type = \SWOOLE_MUTEX, string $lockFile = '')
    {
    }

    public function __destruct()
    {
    }

    public function lock(): bool
    {
    }

    /**
     * @param float $timeout [optional] = 1
     */
    public function lockwait(float $timeout = 1): bool
    {
    }

    public function trylock(): bool
    {
    }

    public function lock_read(): bool
    {
    }

    public function trylock_read(): bool
    {
    }

    public function unlock(): bool
    {
    }

    public function destroy(): void
    {
    }
}
