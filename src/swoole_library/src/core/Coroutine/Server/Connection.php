<?php

declare(strict_types=1);
/**
 * This file is part of OpenSwoole IDE Helper.
 * @link     https://openswoole.com
 * @contact  hello@openswoole.com
 * @license  https://github.com/openswoole/library/blob/master/LICENSE
 */
namespace Swoole\Coroutine\Server;

use Swoole\Coroutine\Socket;

class Connection
{
    protected Socket $socket;

    public function __construct(Socket $conn)
    {
        $this->socket = $conn;
    }

    public function recv(float $timeout = 0): string
    {
        return $this->socket->recvPacket($timeout);
    }

    public function send(string $data)
    {
        return $this->socket->sendAll($data);
    }

    public function close(): bool
    {
        return $this->socket->close();
    }

    public function exportSocket(): Socket
    {
        return $this->socket;
    }
}
