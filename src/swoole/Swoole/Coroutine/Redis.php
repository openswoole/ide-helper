<?php

declare(strict_types=1);
/**
 * This file is part of OpenSwoole IDE Helper.
 * @link     https://www.swoole.co.uk
 * @contact  hello@swoole.co.uk
 * @license  https://github.com/openswoole/library/blob/master/LICENSE
 */
namespace Swoole\Coroutine;

class Redis
{
    public $host;

    public $port;

    public $setting;

    public $sock;

    public $connected;

    public $errType;

    public $errCode;

    public $errMsg;

    /**
     * @param array $setting [optional] = []
     */
    public function __construct(array $setting = [])
    {
    }

    public function __destruct()
    {
    }

    /**
     * @param string $host [required]
     * @param int $port [required]
     * @param bool $serialize [optional] = false
     */
    public function connect(string $host, int $port, bool $serialize = false): bool
    {
    }

    /**
     * @return mixed
     */
    public function getAuth(): mixed
    {
    }

    public function getDBNum(): int|bool
    {
    }

    public function getOptions(): array
    {
    }

    /**
     * @param array $options [required]
     */
    public function setOptions(array $options): bool
    {
    }

    public function getDefer(): bool
    {
    }

    /**
     * @param bool $defer [optional] = true
     */
    public function setDefer(bool $defer = true): bool
    {
    }

    /**
     * @return mixed
     */
    public function recv(): mixed
    {
    }

    /**
     * @param array $params [required]
     */
    public function request(array $params): void
    {
    }

    public function close(): bool
    {
    }

    /**
     * @param string $key [required]
     * @param mixed $value [required]
     * @param mixed $opt [optional] = null
     */
    public function set(string $key, $value, $opt = null): Swoole\Coroutine\Redis|bool
    {
    }

    /**
     * @param string $key [required]
     * @param int $idx [required]
     * @param bool $value [required]
     */
    public function setBit(string $key, int $idx, bool $value): Swoole\Coroutine\Redis|int
    {
    }

    /**
     * @param string $key [required]
     * @param int $expire [required]
     * @param mixed $value [required]
     */
    public function setEx(string $key, int $expire, $value): Swoole\Coroutine\Redis|bool
    {
    }

    /**
     * @param string $key [required]
     * @param int $expire [required]
     * @param mixed $value [required]
     */
    public function psetEx(string $key, int $expire, $value): Swoole\Coroutine\Redis|bool
    {
    }

    /**
     * @param string $key [required]
     * @param int $index [required]
     * @param string $value [required]
     */
    public function lSet(string $key, int $index, string $value): bool
    {
    }

    /**
     * @param string $key [required]
     */
    public function get(string $key): Swoole\Coroutine\Redis|string
    {
    }

    /**
     * @param array $keys [required]
     */
    public function mGet(array $keys): Swoole\Coroutine\Redis|array
    {
    }

    /**
     * @param array|string $key [required]
     * @param string ...$other_keys
     */
    public function del($key, string ...$other_keys): Swoole\Coroutine\Redis|int
    {
    }

    /**
     * @param string $key [required]
     * @param string $member [required]
     * @param string ...$other_members
     */
    public function hDel(string $key, string $member, string ...$other_members): int
    {
    }

    /**
     * @param string $key [required]
     * @param string $member [required]
     * @param string $value [required]
     */
    public function hSet(string $key, string $member, string $value): int
    {
    }

    /**
     * @param string $key [required]
     * @param array $keyvals [required]
     */
    public function hMSet(string $key, array $keyvals): bool
    {
    }

    /**
     * @param string $key [required]
     * @param string $member [required]
     * @param string $value [required]
     */
    public function hSetNx(string $key, string $member, string $value): int
    {
    }

    /**
     * @param array|string $key [required]
     * @param string ...$other_keys
     */
    public function delete($key, string ...$other_keys): Swoole\Coroutine\Redis|int
    {
    }

    /**
     * @param array $key_values [required]
     */
    public function mSet(array $key_values): bool
    {
    }

    /**
     * @param array $key_values [required]
     */
    public function mSetNx(array $key_values): int
    {
    }

    /**
     * @param string $pattern [required]
     */
    public function getKeys(string $pattern): Swoole\Coroutine\Redis|array
    {
    }

    /**
     * @param string $pattern [required]
     */
    public function keys(string $pattern): Swoole\Coroutine\Redis|array
    {
    }

    /**
     * @param string $key [required]
     */
    public function exists(string $key): Swoole\Coroutine\Redis|bool
    {
    }

    /**
     * @param string $key [required]
     */
    public function type(string $key): Swoole\Coroutine\Redis|int
    {
    }

    /**
     * @param string $key [required]
     */
    public function strLen(string $key): Swoole\Coroutine\Redis|int
    {
    }

    /**
     * @param string $key [required]
     */
    public function lPop(string $key): Swoole\Coroutine\Redis|string
    {
    }

    /**
     * @param array|string $key [required]
     * @param string|int $timeout_or_key [required]
     * @param mixed ...$extra_args
     */
    public function blPop($key, $timeout_or_key, ...$extra_args): array
    {
    }

    /**
     * @param string $key [required]
     */
    public function rPop(string $key): Swoole\Coroutine\Redis|string
    {
    }

    /**
     * @param array|string $key [required]
     * @param string|int $timeout_or_key [required]
     * @param mixed ...$extra_args
     */
    public function brPop($key, $timeout_or_key, ...$extra_args): array
    {
    }

    /**
     * @param string $src [required]
     * @param string $dst [required]
     * @param int $timeout [required]
     */
    public function bRPopLPush(string $src, string $dst, int $timeout): string
    {
    }

    /**
     * @param string $key [required]
     */
    public function lSize(string $key): int
    {
    }

    /**
     * @param string $key [required]
     */
    public function lLen(string $key): int
    {
    }

    /**
     * @param string $key [required]
     */
    public function sSize(string $key): int
    {
    }

    /**
     * @param string $key [required]
     */
    public function scard(string $key): int
    {
    }

    /**
     * @param string $key [required]
     * @param int $count [optional] = 0
     */
    public function sPop(string $key, int $count = 0): array|string
    {
    }

    /**
     * @param string $key [required]
     */
    public function sMembers(string $key): array
    {
    }

    /**
     * @param string $key [required]
     */
    public function sGetMembers(string $key): array
    {
    }

    /**
     * @param string $key [required]
     * @param int $count [optional] = 0
     */
    public function sRandMember(string $key, int $count = 0): array|string
    {
    }

    /**
     * @param string $key [required]
     */
    public function persist(string $key): bool
    {
    }

    /**
     * @param string $key [required]
     */
    public function ttl(string $key): int
    {
    }

    /**
     * @param string $key [required]
     */
    public function pttl(string $key): int
    {
    }

    /**
     * @param string $key [required]
     */
    public function zCard(string $key): int
    {
    }

    /**
     * @param string $key [required]
     */
    public function zSize(string $key): int
    {
    }

    /**
     * @param string $key [required]
     */
    public function hLen(string $key): int
    {
    }

    /**
     * @param string $key [required]
     */
    public function hKeys(string $key): array
    {
    }

    /**
     * @param string $key [required]
     */
    public function hVals(string $key): array
    {
    }

    /**
     * @param string $key [required]
     */
    public function hGetAll(string $key): array
    {
    }

    /**
     * @param string $key [required]
     */
    public function debug(string $key): string
    {
    }

    /**
     * @param string $key [required]
     * @param int $timeout [required]
     * @param string $value [required]
     */
    public function restore(string $key, int $timeout, string $value): bool
    {
    }

    /**
     * @param string $key [required]
     */
    public function dump(string $key): string
    {
    }

    /**
     * @param string $key_src [required]
     * @param string $key_dst [required]
     */
    public function renameKey(string $key_src, string $key_dst): Swoole\Coroutine\Redis|bool
    {
    }

    /**
     * @param string $key_src [required]
     * @param string $key_dst [required]
     */
    public function rename(string $key_src, string $key_dst): Swoole\Coroutine\Redis|bool
    {
    }

    /**
     * @param string $key_src [required]
     * @param string $key_dst [required]
     */
    public function renameNx(string $key_src, string $key_dst): Swoole\Coroutine\Redis|bool
    {
    }

    /**
     * @param string $src [required]
     * @param string $dst [required]
     */
    public function rpoplpush(string $src, string $dst): string
    {
    }

    public function randomKey(): Swoole\Coroutine\Redis|string
    {
    }

    /**
     * @param string $key [required]
     * @param array $elements [required]
     */
    public function pfadd(string $key, array $elements): int
    {
    }

    /**
     * @param string $key [required]
     */
    public function pfcount(string $key): int
    {
    }

    /**
     * @param string $dst [required]
     * @param array $keys [required]
     */
    public function pfmerge(string $dst, array $keys): bool
    {
    }

    /**
     * @param string|null $key [optional] = null
     */
    public function ping(?string $key = null): Swoole\Coroutine\Redis|string
    {
    }

    /**
     * @param mixed $credentials [required]
     */
    public function auth($credentials): bool
    {
    }

    public function unwatch(): Swoole\Coroutine\Redis|bool
    {
    }

    /**
     * @param array|string $key [required]
     * @param string ...$other_keys
     */
    public function watch($key, string ...$other_keys): Swoole\Coroutine\Redis|bool
    {
    }

    public function save(): bool
    {
    }

    public function bgSave(): bool
    {
    }

    public function lastSave(): int
    {
    }

    /**
     * @param bool $async [optional] = false
     */
    public function flushDB(bool $async = false): bool
    {
    }

    /**
     * @param bool $async [optional] = false
     */
    public function flushAll(bool $async = false): bool
    {
    }

    public function dbSize(): int
    {
    }

    public function bgrewriteaof(): bool
    {
    }

    public function time(): array
    {
    }

    /**
     * @return mixed
     */
    public function role(): mixed
    {
    }

    /**
     * @param string $key [required]
     * @param int $start [required]
     * @param string $value [required]
     */
    public function setRange(string $key, int $start, string $value): Swoole\Coroutine\Redis|int
    {
    }

    /**
     * @param string $key [required]
     * @param mixed $value [required]
     */
    public function setNx(string $key, $value): Swoole\Coroutine\Redis|array|bool
    {
    }

    /**
     * @param string $key [required]
     * @param mixed $value [required]
     */
    public function getSet(string $key, $value): Swoole\Coroutine\Redis|string
    {
    }

    /**
     * @param string $key [required]
     * @param mixed $value [required]
     */
    public function append(string $key, $value): Swoole\Coroutine\Redis|int
    {
    }

    /**
     * @param string $key [required]
     * @param mixed $value [required]
     */
    public function lPushx(string $key, $value): Swoole\Coroutine\Redis|int
    {
    }

    /**
     * @param string $key [required]
     * @param mixed $value [required]
     */
    public function lPush(string $key, $value): Swoole\Coroutine\Redis|int
    {
    }

    /**
     * @param string $key [required]
     * @param mixed $value [required]
     */
    public function rPush(string $key, $value): Swoole\Coroutine\Redis|int
    {
    }

    /**
     * @param string $key [required]
     * @param mixed $value [required]
     */
    public function rPushx(string $key, $value): Swoole\Coroutine\Redis|int
    {
    }

    /**
     * @param string $key [required]
     * @param mixed $value [required]
     */
    public function sContains(string $key, $value): bool
    {
    }

    /**
     * @param string $key [required]
     * @param mixed $value [required]
     */
    public function sismember(string $key, $value): bool
    {
    }

    /**
     * @param string $key [required]
     * @param mixed $member [required]
     */
    public function zScore(string $key, $member): float
    {
    }

    /**
     * @param string $key [required]
     * @param string $member [required]
     */
    public function zRank(string $key, string $member): int
    {
    }

    /**
     * @param string $key [required]
     * @param string $member [required]
     */
    public function zRevRank(string $key, string $member): int
    {
    }

    /**
     * @param string $key [required]
     * @param string $member [required]
     */
    public function hGet(string $key, string $member): string
    {
    }

    /**
     * @param string $key [required]
     * @param array $keys [required]
     */
    public function hMGet(string $key, array $keys): array
    {
    }

    /**
     * @param string $key [required]
     * @param string $member [required]
     */
    public function hExists(string $key, string $member): bool
    {
    }

    /**
     * @param string $channel [required]
     * @param string $message [required]
     */
    public function publish(string $channel, string $message): int
    {
    }

    /**
     * @param string $key [required]
     * @param float $value [required]
     * @param mixed $member [required]
     */
    public function zIncrBy(string $key, float $value, $member): float
    {
    }

    /**
     * @param string $key [required]
     * @param int $score [required]
     * @param string $value [required]
     */
    public function zAdd(string $key, int $score, string $value): int
    {
    }

    /**
     * @param string $key [required]
     * @param int|null $value [optional] = null
     */
    public function zPopMin(string $key, ?int $value = null): array
    {
    }

    /**
     * @param string $key [required]
     * @param int|null $value [optional] = null
     */
    public function zPopMax(string $key, ?int $value = null): array
    {
    }

    /**
     * @param array|string $key [required]
     * @param string|int $timeout_or_key [required]
     * @param mixed ...$extra_args
     */
    public function bzPopMin($key, $timeout_or_key, ...$extra_args): array
    {
    }

    /**
     * @param array|string $key [required]
     * @param string|int $timeout_or_key [required]
     * @param mixed ...$extra_args
     */
    public function bzPopMax($key, $timeout_or_key, ...$extra_args): array
    {
    }

    /**
     * @param string $key [required]
     * @param string $start [required]
     * @param string $end [required]
     */
    public function zDeleteRangeByScore(string $key, string $start, string $end): int
    {
    }

    /**
     * @param string $key [required]
     * @param string $start [required]
     * @param string $end [required]
     */
    public function zRemRangeByScore(string $key, string $start, string $end): int
    {
    }

    /**
     * @param string $key [required]
     * @param string $start [required]
     * @param string $end [required]
     */
    public function zCount(string $key, string $start, string $end): int
    {
    }

    /**
     * @param string $key [required]
     * @param int $start [required]
     * @param int $end [required]
     * @param mixed $scores [optional] = null
     */
    public function zRange(string $key, int $start, int $end, $scores = null): array
    {
    }

    /**
     * @param string $key [required]
     * @param int $start [required]
     * @param int $end [required]
     * @param mixed $scores [optional] = null
     */
    public function zRevRange(string $key, int $start, int $end, $scores = null): array
    {
    }

    /**
     * @param string $key [required]
     * @param string $start [required]
     * @param string $end [required]
     * @param array $options [optional] = []
     */
    public function zRangeByScore(string $key, string $start, string $end, array $options = []): array
    {
    }

    /**
     * @param string $key [required]
     * @param string $start [required]
     * @param string $end [required]
     * @param array $options [optional] = []
     */
    public function zRevRangeByScore(string $key, string $start, string $end, array $options = []): array
    {
    }

    /**
     * @param string $key [required]
     * @param string $min [required]
     * @param string $max [required]
     * @param int $offset [optional] = -1
     * @param int $count [optional] = -1
     */
    public function zRangeByLex(string $key, string $min, string $max, int $offset = -1, int $count = -1): array
    {
    }

    /**
     * @param string $key [required]
     * @param string $min [required]
     * @param string $max [required]
     * @param int $offset [optional] = -1
     * @param int $count [optional] = -1
     */
    public function zRevRangeByLex(string $key, string $min, string $max, int $offset = -1, int $count = -1): array
    {
    }

    /**
     * @param array $keys [required]
     * @param array $weights [optional] = null
     * @param array $options [optional] = null
     */
    public function zInter(array $keys, array $weights = null, array $options = null): array
    {
    }

    /**
     * @param string $dst [required]
     * @param array $keys [required]
     * @param array $weights [optional] = null
     * @param string $aggregate [optional] = null
     */
    public function zinterstore(string $dst, array $keys, array $weights = null, string $aggregate = null): int
    {
    }

    /**
     * @param array $keys [required]
     * @param array $weights [optional] = null
     * @param array $options [optional] = null
     */
    public function zUnion(array $keys, array $weights = null, array $options = null): array
    {
    }

    /**
     * @param string $dst [required]
     * @param array $keys [required]
     * @param array $weights [optional] = null
     * @param string $aggregate [optional] = null
     */
    public function zunionstore(string $dst, array $keys, array $weights = null, string $aggregate = null): int
    {
    }

    /**
     * @param string $key [required]
     * @param int $value [required]
     */
    public function incrBy(string $key, int $value): Swoole\Coroutine\Redis|int
    {
    }

    /**
     * @param string $key [required]
     * @param string $member [required]
     * @param int $value [required]
     */
    public function hIncrBy(string $key, string $member, int $value): int
    {
    }

    /**
     * @param string $key [required]
     */
    public function incr(string $key): Swoole\Coroutine\Redis|int
    {
    }

    /**
     * @param string $key [required]
     * @param int $value [required]
     */
    public function decrBy(string $key, int $value): Swoole\Coroutine\Redis|int
    {
    }

    /**
     * @param string $key [required]
     */
    public function decr(string $key): Swoole\Coroutine\Redis|int
    {
    }

    /**
     * @param string $key [required]
     * @param int $idx [required]
     */
    public function getBit(string $key, int $idx): Swoole\Coroutine\Redis|int
    {
    }

    /**
     * @param string $key [required]
     * @param int $pos [required]
     * @param mixed $pivot [required]
     * @param mixed $value [required]
     */
    public function lInsert(string $key, int $pos, $pivot, $value): Swoole\Coroutine\Redis|int
    {
    }

    /**
     * @param string $key [required]
     * @param int $index [required]
     */
    public function lGet(string $key, int $index): string
    {
    }

    /**
     * @param string $key [required]
     * @param int $index [required]
     */
    public function lIndex(string $key, int $index): string
    {
    }

    /**
     * @param string $key [required]
     * @param int $timeout [required]
     */
    public function setTimeout(string $key, int $timeout): bool
    {
    }

    /**
     * @param string $key [required]
     * @param int $timeout [required]
     */
    public function expire(string $key, int $timeout): bool
    {
    }

    /**
     * @param string $key [required]
     * @param int $timeout [required]
     */
    public function pexpire(string $key, int $timeout): bool
    {
    }

    /**
     * @param string $key [required]
     * @param int $timeout [required]
     */
    public function expireAt(string $key, int $timeout): bool
    {
    }

    /**
     * @param string $key [required]
     * @param int $timeout [required]
     */
    public function pexpireAt(string $key, int $timeout): bool
    {
    }

    /**
     * @param string $key [required]
     * @param int $index [required]
     */
    public function move(string $key, int $index): bool
    {
    }

    /**
     * @param int $db [required]
     */
    public function select(int $db): bool
    {
    }

    /**
     * @param string $key [required]
     * @param int $start [required]
     * @param int $end [required]
     */
    public function getRange(string $key, int $start, int $end): Swoole\Coroutine\Redis|string
    {
    }

    /**
     * @param string $key [required]
     * @param int $start [required]
     * @param int $end [required]
     */
    public function listTrim(string $key, int $start, int $end): bool
    {
    }

    /**
     * @param string $key [required]
     * @param int $start [required]
     * @param int $end [required]
     */
    public function ltrim(string $key, int $start, int $end): bool
    {
    }

    /**
     * @param string $key [required]
     * @param int $start [required]
     * @param int $end [required]
     */
    public function lGetRange(string $key, int $start, int $end): array
    {
    }

    /**
     * @param string $key [required]
     * @param int $start [required]
     * @param int $end [required]
     */
    public function lRange(string $key, int $start, int $end): array
    {
    }

    /**
     * @param string $key [required]
     * @param string $value [required]
     * @param int $count [optional] = 0
     */
    public function lRem(string $key, string $value, int $count = 0): bool
    {
    }

    /**
     * @param string $key [required]
     * @param string $value [required]
     * @param int $count [optional] = 0
     */
    public function lRemove(string $key, string $value, int $count = 0): bool
    {
    }

    /**
     * @param string $key [required]
     * @param int $start [required]
     * @param int $end [required]
     */
    public function zDeleteRangeByRank(string $key, int $start, int $end): int
    {
    }

    /**
     * @param string $key [required]
     * @param int $start [required]
     * @param int $end [required]
     */
    public function zRemRangeByRank(string $key, int $start, int $end): int
    {
    }

    /**
     * @param string $key [required]
     * @param float $value [required]
     */
    public function incrByFloat(string $key, float $value): Swoole\Coroutine\Redis|int
    {
    }

    /**
     * @param string $key [required]
     * @param string $member [required]
     * @param float $value [required]
     */
    public function hIncrByFloat(string $key, string $member, float $value): float
    {
    }

    /**
     * @param string $key [required]
     * @param int $start [optional] = 0
     * @param int $end [optional] = -1
     */
    public function bitCount(string $key, int $start = 0, int $end = -1): Swoole\Coroutine\Redis|int
    {
    }

    /**
     * @param string $operation [required]
     * @param string $deskey [required]
     * @param string $srckey [required]
     * @param string ...$other_keys
     */
    public function bitOp(string $operation, string $deskey, string $srckey, string ...$other_keys): int
    {
    }

    /**
     * @param string $key [required]
     * @param mixed $value [required]
     * @param mixed ...$other_values
     */
    public function sAdd(string $key, $value, ...$other_values): int
    {
    }

    /**
     * @param string $src [required]
     * @param string $dst [required]
     * @param mixed $value [required]
     */
    public function sMove(string $src, string $dst, $value): bool
    {
    }

    /**
     * @param string $key [required]
     * @param string ...$other_keys
     */
    public function sDiff(string $key, string ...$other_keys): array
    {
    }

    /**
     * @param string $dst [required]
     * @param string $key [required]
     * @param string ...$other_keys
     */
    public function sDiffStore(string $dst, string $key, string ...$other_keys): int
    {
    }

    /**
     * @param string $key [required]
     * @param string ...$other_keys
     */
    public function sUnion(string $key, string ...$other_keys): array
    {
    }

    /**
     * @param string $dst [required]
     * @param string $key [required]
     * @param string ...$other_keys
     */
    public function sUnionStore(string $dst, string $key, string ...$other_keys): int
    {
    }

    /**
     * @param string $key [required]
     * @param string ...$other_keys
     */
    public function sInter(string $key, string ...$other_keys): array
    {
    }

    /**
     * @param string $dst [required]
     * @param string $key [required]
     * @param string ...$other_keys
     */
    public function sInterStore(string $dst, string $key, string ...$other_keys): int
    {
    }

    /**
     * @param string $key [required]
     * @param string $value [required]
     * @param string ...$other_values
     */
    public function sRemove(string $key, string $value, string ...$other_values): int
    {
    }

    /**
     * @param string $key [required]
     * @param string $value [required]
     * @param string ...$other_values
     */
    public function srem(string $key, string $value, string ...$other_values): int
    {
    }

    /**
     * @param string $key [required]
     * @param string $member [required]
     * @param string ...$other_members
     */
    public function zDelete(string $key, string $member, string ...$other_members): int
    {
    }

    /**
     * @param string $key [required]
     * @param string $member [required]
     * @param string ...$other_members
     */
    public function zRemove(string $key, string $member, string ...$other_members): int
    {
    }

    /**
     * @param string $key [required]
     * @param string $member [required]
     * @param string ...$other_members
     */
    public function zRem(string $key, string $member, string ...$other_members): int
    {
    }

    /**
     * @param array $patterns [required]
     */
    public function pSubscribe(array $patterns): void
    {
    }

    /**
     * @param string $channel [required]
     * @param string ...$other_channels
     */
    public function subscribe(string $channel, string ...$other_channels): array
    {
    }

    /**
     * @param string $channel [required]
     * @param string ...$other_channels
     */
    public function unsubscribe(string $channel, string ...$other_channels): array
    {
    }

    /**
     * @param array $patterns [required]
     */
    public function pUnSubscribe(array $patterns): array
    {
    }

    /**
     * @param int $value [optional]
     */
    public function multi(int $value): Swoole\Coroutine\Redis|bool
    {
    }

    public function exec(): array
    {
    }

    /**
     * @param string $script [required]
     * @param array $keys [optional] = null
     * @param int $num_keys [optional] = 0
     * @return mixed
     */
    public function eval(string $script, array $keys = null, int $num_keys = 0): mixed
    {
    }

    /**
     * @param string $sha1 [required]
     * @param array $keys [optional] = null
     * @param int $num_keys [optional] = 0
     * @return mixed
     */
    public function evalSha(string $sha1, array $keys = null, int $num_keys = 0): mixed
    {
    }

    /**
     * @param string $command [required]
     * @param mixed ...$args
     * @return mixed
     */
    public function script(string $command, ...$args): mixed
    {
    }
}
