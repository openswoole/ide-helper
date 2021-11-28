<?php

declare(strict_types=1);
/**
 * This file is part of OpenSwoole IDE Helper.
 * @link     https://www.swoole.co.uk
 * @contact  hello@swoole.co.uk
 * @license  https://github.com/openswoole/library/blob/master/LICENSE
 */
namespace Swoole\Server;

class StatusInfo
{
    public $worker_id = 0;

    public $worker_pid = 0;

    public $status = 0;

    public $exit_code = 0;

    public $signal = 0;
}
