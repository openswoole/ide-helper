<?php

declare(strict_types=1);
/**
 * This file is part of OpenSwoole IDE Helper.
 * @link     https://openswoole.com
 * @contact  hello@openswoole.com
 * @license  https://github.com/openswoole/library/blob/master/LICENSE
 */
namespace Swoole\WebSocket;

class Server extends \Swoole\Http\Server
{
    /**
     * @param int $fd [required]
     * @param Swoole\WebSocket\Frame|string $data [required]
     * @param int $opcode [optional] = \SWOOLE_WEBSOCKET_OPCODE_TEXT
     * @param int $flags [optional] = \SWOOLE_WEBSOCKET_FLAG_FIN
     */
    public function push(int $fd, $data, int $opcode = \SWOOLE_WEBSOCKET_OPCODE_TEXT, int $flags = \SWOOLE_WEBSOCKET_FLAG_FIN): bool
    {
    }

    /**
     * @param int $fd [required]
     * @param int $code [optional] = \SWOOLE_WEBSOCKET_CLOSE_NORMAL
     * @param string $reason [optional] = ''
     */
    public function disconnect(int $fd, int $code = \SWOOLE_WEBSOCKET_CLOSE_NORMAL, string $reason = ''): bool
    {
    }

    /**
     * @param int $fd [required]
     */
    public function isEstablished(int $fd): bool
    {
    }

    /**
     * @param Swoole\WebSocket\Frame|string $data [required]
     * @param int $opcode [optional] = \SWOOLE_WEBSOCKET_OPCODE_TEXT
     * @param int $flags [optional] = \SWOOLE_WEBSOCKET_FLAG_FIN
     * @return \Swoole\WebSocket\Frame
     */
    public static function pack($data, int $opcode = \SWOOLE_WEBSOCKET_OPCODE_TEXT, int $flags = \SWOOLE_WEBSOCKET_FLAG_FIN)
    {
    }

    /**
     * @param string $data [required]
     * @return \Swoole\WebSocket\Frame|false
     */
    public static function unpack(string $data)
    {
    }
}
