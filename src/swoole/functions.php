<?php

declare(strict_types=1);
/**
 * This file is part of OpenSwoole IDE Helper.
 * @link     https://openswoole.com
 * @contact  hello@openswoole.com
 * @license  https://github.com/openswoole/library/blob/master/LICENSE
 */
/**
 * @return mixed
 */
function swoole_version()
{
}

/**
 * @return mixed
 */
function swoole_cpu_num()
{
}

/**
 * @return mixed
 */
function swoole_last_error()
{
}

/**
 * @param mixed $domain_name [required]
 * @param mixed $timeout [optional]
 * @param mixed $type [optional]
 * @return mixed
 */
function swoole_async_dns_lookup_coro($domain_name, $timeout, $type)
{
}

/**
 * @param array $settings [required]
 * @return mixed
 */
function swoole_async_set(array $settings)
{
}

/**
 * @param callable $func [required]
 * @param mixed ...$params
 * @return mixed
 */
function swoole_coroutine_create(callable $func, ...$params)
{
}

/**
 * @param callable $callback [required]
 * @return mixed
 */
function swoole_coroutine_defer(callable $callback)
{
}

/**
 * @param mixed $domain [required]
 * @param mixed $type [required]
 * @param mixed $protocol [required]
 * @return mixed
 */
function swoole_coroutine_socketpair($domain, $type, $protocol)
{
}

/**
 * @param mixed $count [optional]
 * @param mixed $sleep_time [optional]
 * @return mixed
 */
function swoole_test_kernel_coroutine($count, $sleep_time)
{
}

/**
 * @param mixed $read_array [required]
 * @param mixed $write_array [required]
 * @param mixed $error_array [required]
 * @param mixed $timeout [optional]
 * @return mixed
 */
function swoole_client_select(&$read_array, &$write_array, &$error_array, $timeout)
{
}

/**
 * @param mixed $read_array [required]
 * @param mixed $write_array [required]
 * @param mixed $error_array [required]
 * @param mixed $timeout [optional]
 * @return mixed
 */
function swoole_select(&$read_array, &$write_array, &$error_array, $timeout)
{
}

/**
 * @param mixed $process_name [required]
 * @return mixed
 */
function swoole_set_process_name($process_name)
{
}

/**
 * @return mixed
 */
function swoole_get_local_ip()
{
}

/**
 * @return mixed
 */
function swoole_get_local_mac()
{
}

/**
 * @param mixed $errno [required]
 * @param mixed $error_type [optional]
 * @return mixed
 */
function swoole_strerror($errno, $error_type)
{
}

/**
 * @return mixed
 */
function swoole_errno()
{
}

/**
 * @return mixed
 */
function swoole_clear_error()
{
}

/**
 * @param mixed $level [required]
 * @param mixed $msg [required]
 * @return mixed
 */
function swoole_error_log($level, $msg)
{
}

/**
 * @param mixed $data [required]
 * @param mixed $type [optional]
 * @return mixed
 */
function swoole_hashcode($data, $type)
{
}

/**
 * @param mixed $suffix [required]
 * @param mixed $mime_type [required]
 * @return mixed
 */
function swoole_mime_type_add($suffix, $mime_type)
{
}

/**
 * @param mixed $suffix [required]
 * @param mixed $mime_type [required]
 * @return mixed
 */
function swoole_mime_type_set($suffix, $mime_type)
{
}

/**
 * @param mixed $suffix [required]
 * @return mixed
 */
function swoole_mime_type_delete($suffix)
{
}

/**
 * @param mixed $filename [required]
 * @return mixed
 */
function swoole_mime_type_get($filename)
{
}

/**
 * @param mixed $filename [required]
 * @return mixed
 */
function swoole_get_mime_type($filename)
{
}

/**
 * @param mixed $filename [required]
 * @return mixed
 */
function swoole_mime_type_exists($filename)
{
}

/**
 * @return mixed
 */
function swoole_mime_type_list()
{
}

/**
 * @return mixed
 */
function swoole_clear_dns_cache()
{
}

/**
 * @param mixed $str [required]
 * @param mixed $offset [required]
 * @param mixed $length [optional]
 * @param mixed $options [optional]
 * @return mixed
 */
function swoole_substr_unserialize($str, $offset, $length, $options)
{
}

/**
 * @return mixed
 */
function swoole_internal_call_user_shutdown_begin()
{
}

/**
 * @param callable $func [required]
 * @return mixed
 */
function go(callable $func)
{
}

/**
 * @param callable $callback [required]
 * @return mixed
 */
function defer(callable $callback)
{
}

/**
 * @param mixed $sock [required]
 * @param callable|null $readCallback [optional] = null
 * @param callable|null $writeCallback [optional] = null
 * @param int $flags [optional] = \SWOOLE_EVENT_READ
 */
function swoole_event_add($sock, ?callable $readCallback = null, ?callable $writeCallback = null, int $flags = \SWOOLE_EVENT_READ)
{
}

/**
 * @param mixed $sock [required]
 */
function swoole_event_del($sock): bool
{
}

/**
 * @param mixed $sock [required]
 * @param callable|null $readCallback [optional] = null
 * @param callable|null $writeCallback [optional] = null
 * @param int $flags [optional] = \SWOOLE_EVENT_READ
 */
function swoole_event_set($sock, ?callable $readCallback = null, ?callable $writeCallback = null, int $flags = \SWOOLE_EVENT_READ): bool
{
}

/**
 * @param mixed $sock [required]
 * @param int $flags [optional] = 1536
 */
function swoole_event_isset($sock, int $flags = 1536): bool
{
}

function swoole_event_dispatch(): bool
{
}

/**
 * @param callable $callback [required]
 */
function swoole_event_defer(callable $callback): bool
{
}

/**
 * @param callable $callback [required]
 * @param bool $before [optional] = false
 */
function swoole_event_cycle(callable $callback, bool $before = false): bool
{
}

/**
 * @param mixed $sock [required]
 * @param string $data [required]
 */
function swoole_event_write($sock, string $data): bool
{
}

function swoole_event_wait(): void
{
}

function swoole_event_exit(): void
{
}

/**
 * @param array $settings [required]
 */
function swoole_timer_set(array $settings): bool
{
}

/**
 * @param int $ms [required]
 * @param callable $callback [required]
 */
function swoole_timer_after(int $ms, callable $callback)
{
}

/**
 * @param int $ms [required]
 * @param callable $callback [required]
 */
function swoole_timer_tick(int $ms, callable $callback)
{
}

function swoole_timer_exists(): bool
{
}

function swoole_timer_info()
{
}

function swoole_timer_stats(): array
{
}

/**
 * @return mixed
 */
function swoole_timer_list()
{
}

function swoole_timer_clear(): bool
{
}

function swoole_timer_clear_all(): bool
{
}
