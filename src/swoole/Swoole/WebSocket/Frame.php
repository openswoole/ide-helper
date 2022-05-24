<?php

declare(strict_types=1);
/**
 * This file is part of OpenSwoole IDE Helper.
 * @link     https://openswoole.com
 * @contact  hello@openswoole.com
 * @license  https://github.com/openswoole/library/blob/master/LICENSE
 */
namespace Swoole\WebSocket;

class Frame implements \Stringable
{
    public int $fd;

    public ?string $data;

    public int $opcode;

    public int $flags;

    public bool $finish;

    public function __toString(): string
    {
    }

    /**
     * @param \Swoole\WebSocket\Frame|string $data [required]
     * @param int $opcode [optional] = \SWOOLE_WEBSOCKET_OPCODE_TEXT
     * @param int $flags [optional] = \SWOOLE_WEBSOCKET_FLAG_FIN
     */
    public static function pack($data, int $opcode = \SWOOLE_WEBSOCKET_OPCODE_TEXT, int $flags = \SWOOLE_WEBSOCKET_FLAG_FIN): string
    {
    }

    /**
     * @param string $data [required]
     */
    public static function unpack(string $data)
    {
    }
}
