<?php

declare(strict_types=1);
/**
 * This file is part of OpenSwoole IDE Helper.
 * @link     https://openswoole.com
 * @contact  hello@openswoole.com
 * @license  https://github.com/openswoole/library/blob/master/LICENSE
 */
namespace Swoole\Coroutine\Http2;

use Swoole\Http2\Request;
use Swoole\Http2\Response;

class Client
{
    public int $errCode = 0;

    /**
     * @var int|string
     */
    public $errMsg = 0;

    public int $sock = -1;

    public int $type = 0;

    public ?array $setting;

    public bool $connected = false;

    public string $host;

    public int $port = 0;

    public bool $ssl = false;

    public function __construct(string $host, int $port, bool $openSSL = false)
    {
    }

    public function __destruct()
    {
    }

    public function set(array $settings): void
    {
    }

    public function connect(): bool
    {
    }

    /**
     * @return array|bool
     */
    public function stats(?string $key = null)
    {
    }

    public function isStreamExist(int $stream_id): bool
    {
    }

    /**
     * @return int|bool
     */
    public function send(Request $request)
    {
    }

    /**
     * @param mixed $data
     */
    public function write(int $streamId, $data, bool $end = false): bool
    {
    }

    /**
     * @return Response|false
     */
    public function recv(?float $timeout = null)
    {
    }

    /**
     * @return Response|false
     */
    public function read(?float $timeout = null)
    {
    }

    public function goaway(int $errorCode = SWOOLE_HTTP2_ERROR_NO_ERROR, string $debugData): bool
    {
    }

    public function ping(): bool
    {
    }

    public function close(): bool
    {
    }
}
