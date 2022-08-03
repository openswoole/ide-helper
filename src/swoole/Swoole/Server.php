<?php

declare(strict_types=1);
/**
 * This file is part of OpenSwoole IDE Helper.
 * @link     https://openswoole.com
 * @contact  hello@openswoole.com
 * @license  https://github.com/openswoole/library/blob/master/LICENSE
 */
namespace Swoole;

use Closure;
use Swoole\Connection\Iterator;
use Swoole\Server\Port;

use const OPENSWOOLE_STATS_DEFAULT;
use const SWOOLE_PROCESS;
use const SWOOLE_SOCK_TCP;

class Server
{
    public array $setting;

    public Iterator $connections;

    public string $host;

    public int $port;

    public int $type;

    public int $mode;

    public array $ports;

    public int $master_pid;

    public int $manager_pid;

    public int $worker_id;

    public $taskworker;

    public int $worker_pid;

    public $stats_timer;

    private ?Closure $onStart;

    private ?Closure $onShutdown;

    private ?Closure $onWorkerStart;

    private ?Closure $onWorkerStop;

    private ?Closure $onBeforeReload;

    private ?Closure $onAfterReload;

    private ?Closure $onWorkerExit;

    private ?Closure $onWorkerError;

    private ?Closure $onTask;

    private ?Closure $onFinish;

    private ?Closure $onManagerStart;

    private ?Closure $onManagerStop;

    private ?Closure $onPipeMessage;

    /**
     * @param string $host [required]
     * @param int $port [optional] = 0
     * @param int $mode [optional] = \SWOOLE_PROCESS
     * @param int $sockType [optional] = \SWOOLE_SOCK_TCP
     */
    public function __construct(string $host, int $port = 0, int $mode = SWOOLE_PROCESS, int $sockType = SWOOLE_SOCK_TCP)
    {
    }

    public function __destruct()
    {
    }

    /**
     * @param string $host [required]
     * @param int $port [required]
     * @param int $sockType [required]
     */
    public function listen(string $host, int $port, int $sockType): bool
    {
    }

    /**
     * @param string $host [required]
     * @param int $port [required]
     * @param int $sockType [required]
     * @return bool|Port
     */
    public function addListener(string $host, int $port, int $sockType)
    {
    }

    /**
     * @param string $event [required]
     * @param callable $callback [required]
     */
    public function on(string $event, callable $callback): bool
    {
    }

    /**
     * @param string $event [required]
     */
    public function getCallback(string $event): mixed
    {
    }

    /**
     * @param array $settings [required]
     */
    public function set(array $settings): bool
    {
    }

    public function start(): bool
    {
    }

    /**
     * @param int $fd [required]
     * @param string $data [required]
     * @param int $serverSocket [optional] = -1
     */
    public function send(int $fd, string $data, int $serverSocket = -1): bool
    {
    }

    /**
     * @param string $ip [required]
     * @param int $port [required]
     * @param string $data [required]
     * @param int $serverSocket [optional] = -1
     */
    public function sendto(string $ip, int $port, string $data, int $serverSocket = -1): bool
    {
    }

    /**
     * @param int $fd [required]
     * @param string $data [required]
     */
    public function sendwait(int $fd, string $data): bool
    {
    }

    /**
     * @param int $fd [required]
     */
    public function exists(int $fd): bool
    {
    }

    /**
     * @param int $fd [required]
     */
    public function exist(int $fd): bool
    {
    }

    /**
     * @param int $fd [required]
     * @param bool $isProtected [optional] = true
     */
    public function protect(int $fd, bool $isProtected = true): bool
    {
    }

    /**
     * @param int $fd [required]
     * @param string $fileName [required]
     * @param int $offset [optional] = 0
     * @param int $length [optional] = 0
     */
    public function sendfile(int $fd, string $fileName, int $offset = 0, int $length = 0): bool
    {
    }

    /**
     * @param int $fd [required]
     * @param bool $reset [optional] = false
     */
    public function close(int $fd, bool $reset = false): bool
    {
    }

    /**
     * @param int $fd [required]
     */
    public function confirm(int $fd): bool
    {
    }

    /**
     * @param int $fd [required]
     */
    public function pause(int $fd): bool
    {
    }

    /**
     * @param int $fd [required]
     */
    public function resume(int $fd): bool
    {
    }

    /**
     * @param mixed $data [required]
     * @param int $workerId [optional] = -1
     * @param callable|null $finishCallback [optional] = null
     */
    public function task($data, int $workerId = -1, ?callable $finishCallback = null): int
    {
    }

    /**
     * @param mixed $data [required]
     * @param float $timeout [optional] = 0.5
     * @param int $workerId [optional] = -1
     * @return string|bool
     */
    public function taskwait($data, float $timeout = 0.5, int $workerId = -1)
    {
    }

    /**
     * @param array $tasks [required]
     * @param float $timeout [optional] = 0.5
     * @return bool|array
     */
    public function taskWaitMulti(array $tasks, float $timeout = 0.5)
    {
    }

    /**
     * @param array $tasks [required]
     * @param float $timeout [optional] = 0.5
     */
    public function taskCo(array $tasks, float $timeout = 0.5): array
    {
    }

    /**
     * @param mixed $data [required]
     */
    public function finish($data): bool
    {
    }

    public function reload(): bool
    {
    }

    public function shutdown(): bool
    {
    }

    /**
     * @param int $workerId [required]
     * @param bool $waitEvent [optional] = false
     */
    public function stop(int $workerId, bool $waitEvent = false): bool
    {
    }

    /**
     * @return int|false
     */
    public function tick(int $milliseconds, callable $callback)
    {
    }

    /**
     * @return int|false
     */
    public function after(int $milliseconds, callable $callback)
    {
    }

    public function defer(callable $callback): void
    {
    }

    public function clearTimer(int $timerId): bool
    {
    }

    public function getLastError(): int
    {
    }

    /**
     * @param bool $closeConn [optional] = false
     * @return bool|array
     */
    public function heartbeat(bool $closeConn = false)
    {
    }

    /**
     * @param int $fd [required]
     * @param int $reactorId [optional] = -1
     * @param bool $noCheckConn [optional] = false
     * @return bool|array
     */
    public function getClientInfo(int $fd, int $reactorId = -1, bool $noCheckConn = false)
    {
    }

    /**
     * @param int $startFd [optional] = 0
     * @param int $pageSize [optional] = 10
     * @return false|array
     */
    public function getClientList(int $startFd = 0, int $pageSize = 10)
    {
    }

    public function getWorkerId(): int
    {
    }

    /**
     * @param int $workerId [optional] = -1
     */
    public function getWorkerPid(int $workerId = -1): int
    {
    }

    /**
     * @param int $workerId [optional] = -1
     */
    public function getWorkerStatus(int $workerId = -1): int
    {
    }

    public function getManagerPid(): int
    {
    }

    public function getMasterPid(): int
    {
    }

    /**
     * @param int $fd [required]
     * @param int $reactorId [optional] = -1
     * @param bool $noCheckConn [optional] = false
     */
    public function connection_info(int $fd, int $reactorId = -1, bool $noCheckConn = false)
    {
    }

    /**
     * @param int $startFd [optional] = 0
     * @param int $pageSize [optional] = 10
     */
    public function connection_list(int $startFd = 0, int $pageSize = 10)
    {
    }

    /**
     * @param mixed $message [required]
     * @param int $workerId [required]
     */
    public function sendMessage($message, int $workerId): bool
    {
    }

    /**
     * @param Process $process [required]
     */
    public function addProcess(Process $process): bool
    {
    }

    /**
     * @param int $mode [optional] = OPENSWOOLE_STATS_DEFAULT
     * @return string|array|false
     */
    public function stats(int $mode = OPENSWOOLE_STATS_DEFAULT)
    {
    }

    /**
     * @param int $fd [required]
     * @param int $uid [required]
     */
    public function bind(int $fd, int $uid): bool
    {
    }

    /**
     * @return Socket|resource
     */
    public function getSocket()
    {
    }
}
