<?php

declare(strict_types=1);
/**
 * This file is part of OpenSwoole IDE Helper.
 * @link     https://openswoole.com
 * @contact  hello@openswoole.com
 * @license  https://github.com/openswoole/library/blob/master/LICENSE
 */
namespace Swoole\Server;

class StatusInfo
{
    public $worker_id;

    public $worker_pid;

    public $status;

    public $exit_code;

    public $signal;
}
