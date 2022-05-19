<?php

declare(strict_types=1);
/**
 * This file is part of OpenSwoole IDE Helper.
 * @link     https://openswoole.com
 * @contact  hello@openswoole.com
 * @license  https://github.com/openswoole/library/blob/master/LICENSE
 */
namespace Swoole\Http;

class Response
{
    public int $fd;

    public $socket;

    public ?array $header;

    public ?array $cookie;

    public $trailer;

    public function __destruct()
    {
    }

    public function initHeader(): bool
    {
    }

    public function isWritable(): bool
    {
    }

    /**
     * @param string $key [required]
     * @param string|null $value [optional] = null
     * @param int $expire [optional] = 0
     * @param string $path [optional] = ''
     * @param string $domain [optional] = ''
     * @param bool $secure [optional] = false
     * @param bool $httpOnly [optional] = false
     * @param string $sameSite [optional] = ''
     * @param string $priority [optional] = ''
     */
    public function cookie(string $key, ?string $value = null, int $expire = 0, string $path = '', string $domain = '', bool $secure = false, bool $httpOnly = false, string $sameSite = '', string $priority = ''): bool
    {
    }

    /**
     * @param string $key [required]
     * @param string|null $value [optional] = null
     * @param int $expire [optional] = 0
     * @param string $path [optional] = ''
     * @param string $domain [optional] = ''
     * @param bool $secure [optional] = false
     * @param bool $httpOnly [optional] = false
     * @param string $sameSite [optional] = ''
     * @param string $priority [optional] = ''
     */
    public function setCookie(string $key, ?string $value = null, int $expire = 0, string $path = '', string $domain = '', bool $secure = false, bool $httpOnly = false, string $sameSite = '', string $priority = ''): bool
    {
    }

    /**
     * @param string $key [required]
     * @param string|null $value [optional] = null
     * @param int $expire [optional] = 0
     * @param string $path [optional] = ''
     * @param string $domain [optional] = ''
     * @param bool $secure [optional] = false
     * @param bool $httpOnly [optional] = false
     * @param string $sameSite [optional] = ''
     * @param string $priority [optional] = ''
     */
    public function rawcookie(string $key, ?string $value = null, int $expire = 0, string $path = '', string $domain = '', bool $secure = false, bool $httpOnly = false, string $sameSite = '', string $priority = ''): bool
    {
    }

    /**
     * @param int $statusCode [required]
     * @param string $reason [optional] = ''
     */
    public function status(int $statusCode, string $reason = ''): bool
    {
    }

    /**
     * @param int $statusCode [required]
     * @param string $reason [optional] = ''
     */
    public function setStatusCode(int $statusCode, string $reason = ''): bool
    {
    }

    /**
     * @param string $key [required]
     * @param string $value [required]
     * @param bool $format [optional] = true
     */
    public function header(string $key, string $value, bool $format = true): bool
    {
    }

    /**
     * @param string $key [required]
     * @param string $value [required]
     */
    public function trailer(string $key, string $value): bool
    {
    }

    /**
     * @param string $key [required]
     * @param string $value [required]
     * @param bool $format [optional] = true
     */
    public function setHeader(string $key, string $value, bool $format = true): bool
    {
    }

    /**
     * @param string $data [required]
     */
    public function write(string $data): bool
    {
    }

    /**
     * @param string|null $data [optional] = null
     */
    public function end(?string $data = null): bool
    {
    }

    /**
     * @param string $fileName [required]
     * @param int $offset [optional] = 0
     * @param int $length [optional] = 0
     */
    public function sendfile(string $fileName, int $offset = 0, int $length = 0): bool
    {
    }

    /**
     * @param string $url [required]
     * @param int $status_code [optional] = 302
     * @return ?bool
     */
    public function redirect(string $url, int $status_code = 302): ?bool
    {
    }

    public function detach(): bool
    {
    }

    /**
     * @param mixed $server [optional] = -1
     * @param int $fd [optional] = -1
     * @return Swoole\Http\Response
     */
    public static function create($server = -1, int $fd = -1)
    {
    }

    public function upgrade(): bool
    {
    }

    /**
     * @param Swoole\WebSocket\Frame|string $data [required]
     * @param int $opcode [optional] = \SWOOLE_WEBSOCKET_OPCODE_TEXT
     * @param int $flags [optional] = \SWOOLE_WEBSOCKET_FLAG_FIN
     */
    public function push($data, int $opcode = \SWOOLE_WEBSOCKET_OPCODE_TEXT, int $flags = \SWOOLE_WEBSOCKET_FLAG_FIN): bool
    {
    }

    /**
     * @param float $timeout [optional] = 0
     */
    public function recv(float $timeout = 0)
    {
    }

    public function close(): bool
    {
    }
}
