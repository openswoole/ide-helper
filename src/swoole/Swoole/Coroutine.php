<?php

declare(strict_types=1);
/**
 * This file is part of OpenSwoole IDE Helper.
 * @link     https://www.swoole.co.uk
 * @contact  hello@swoole.co.uk
 * @license  https://github.com/openswoole/library/blob/master/LICENSE
 */
namespace Swoole;

class Coroutine
{
    /**
     * @param callable $callback [required]
     * @param mixed ...$params
     */
    public static function create(callable $callback, ...$params): int|false
    {
    }

    /**
     * @param callable $callback [required]
     */
    public static function defer(callable $callback): void
    {
    }

    /**
     * @param array $options [required]
     * @return ?mixed
     */
    public static function set(array $options): ?mixed
    {
    }

    /**
     * @return ?array
     */
    public static function getOptions(): ?array
    {
    }

    /**
     * @param int $cid [required]
     */
    public static function exists(int $cid): bool
    {
    }

    public static function yield(): bool
    {
    }

    /**
     * @param int $cid [required]
     */
    public static function cancel(int $cid): bool
    {
    }

    public static function isCanceled(): bool
    {
    }

    public static function suspend(): bool
    {
    }

    /**
     * @param int $cid [required]
     */
    public static function resume(int $cid): bool
    {
    }

    public static function stats(): array
    {
    }

    public static function getCid(): int
    {
    }

    public static function getuid(): int
    {
    }

    /**
     * @param int $cid [optional] = 0
     */
    public static function getPcid(int $cid = 0): int
    {
    }

    /**
     * @param int $cid [optional] = 0
     * @return ?\Swoole\Coroutine\Context
     */
    public static function getContext(int $cid = 0): ?Coroutine\Context
    {
    }

    /**
     * @param int $cid [optional] = 0
     * @param int $options [optional] = \DEBUG_BACKTRACE_PROVIDE_OBJECT
     * @param int $limit [optional] = 0
     */
    public static function getBackTrace(int $cid = 0, int $options = \DEBUG_BACKTRACE_PROVIDE_OBJECT, int $limit = 0): array|false
    {
    }

    /**
     * @param int $cid [optional] = 0
     * @param int $options [optional] = \DEBUG_BACKTRACE_PROVIDE_OBJECT
     * @param int $limit [optional] = 0
     */
    public static function printBackTrace(int $cid = 0, int $options = \DEBUG_BACKTRACE_PROVIDE_OBJECT, int $limit = 0): void
    {
    }

    /**
     * @param int $cid [optional] = 0
     */
    public static function getElapsed(int $cid = 0): int
    {
    }

    /**
     * @param int $cid [optional] = 0
     */
    public static function getStackUsage(int $cid = 0): int|false
    {
    }

    /**
     * @return \Swoole\Coroutine\Iterator
     */
    public static function list(): Coroutine\Iterator
    {
    }

    /**
     * @return \Swoole\Coroutine\Iterator
     */
    public static function listCoroutines(): Coroutine\Iterator
    {
    }

    public static function enableScheduler(): bool
    {
    }

    public static function disableScheduler(): bool
    {
    }

    /**
     * @param string $domain [required]
     * @param int $family [optional] = \AF_INET
     * @param float $timeout [optional] = -1
     */
    public static function gethostbyname(string $domain, int $family = \AF_INET, float $timeout = -1): string|false
    {
    }

    /**
     * @param string $domain [required]
     * @param float $timeout [optional] = 5
     */
    public static function dnsLookup(string $domain, float $timeout = 5): string|false
    {
    }

    /**
     * @param string $command [required]
     * @param bool $get_error_stream [optional] = false
     */
    public static function exec(string $command, bool $get_error_stream = false): array|false
    {
    }

    /**
     * @param float $seconds [required]
     */
    public static function sleep(float $seconds): bool
    {
    }

    /**
     * @param string $domain [required]
     * @param int $family [optional] = \AF_INET
     * @param int $sockType [optional] = \SOCK_STREAM
     * @param int $protocol [optional] = \STREAM_IPPROTO_TCP
     * @param string $service [optional] = null
     * @param float $timeout [optional] = -1
     */
    public static function getaddrinfo(string $domain, int $family = \AF_INET, int $sockType = \SOCK_STREAM, int $protocol = \STREAM_IPPROTO_TCP, string $service = null, float $timeout = -1): array|false
    {
    }

    /**
     * @param string $path [required]
     */
    public static function statvfs(string $path): array|bool
    {
    }

    /**
     * @param string $filename [required]
     * @param int $flags [optional] = 0
     */
    public static function readFile(string $filename, int $flags = 0): string|false
    {
    }

    /**
     * @param string $filename [required]
     * @param string $data [required]
     * @param int $flags [optional] = 0
     */
    public static function writeFile(string $filename, string $data, int $flags = 0): int|bool
    {
    }

    /**
     * @param float $timeout [optional] = -1
     */
    public static function wait(float $timeout = -1): array|bool
    {
    }

    /**
     * @param int $pid [required]
     * @param float $timeout [optional] = -1
     */
    public static function waitPid(int $pid, float $timeout = -1): array|bool
    {
    }

    /**
     * @param int $signalNum [required]
     * @param float $timeout [optional] = -1
     */
    public static function waitSignal(int $signalNum, float $timeout = -1): bool
    {
    }

    /**
     * @param mixed $fd [required]
     * @param int $events [required]
     * @param float $timeout [optional] = -1
     */
    public static function waitEvent($fd, int $events, float $timeout = -1): int|bool
    {
    }

    /**
     * @param mixed $handle [required]
     * @param int $length [optional] = 0
     */
    public static function fread($handle, int $length = 0): string|false
    {
    }

    /**
     * @param mixed $handle [required]
     * @param string $data [required]
     * @param int $length [optional] = 0
     */
    public static function fwrite($handle, string $data, int $length = 0): int|false
    {
    }

    /**
     * @param mixed $handle [required]
     */
    public static function fgets($handle): string|bool
    {
    }
}
