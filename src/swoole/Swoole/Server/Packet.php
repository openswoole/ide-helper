<?php

declare(strict_types=1);
/**
 * This file is part of OpenSwoole IDE Helper.
 * @link     https://www.swoole.co.uk
 * @contact  hello@swoole.co.uk
 * @license  https://github.com/openswoole/library/blob/master/LICENSE
 */
namespace Swoole\Server;

class Packet
{
    public $server_socket = 0;

    public $server_port = 0;

    public $dispatch_time = 0;

    public $address;

    public $port = 0;
}
