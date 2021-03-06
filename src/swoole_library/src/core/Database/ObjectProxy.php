<?php

declare(strict_types=1);
/**
 * This file is part of OpenSwoole IDE Helper.
 * @link     https://openswoole.com
 * @contact  hello@openswoole.com
 * @license  https://github.com/openswoole/library/blob/master/LICENSE
 */
namespace Swoole\Database;

use Error;

class ObjectProxy extends \Swoole\ObjectProxy
{
    public function __clone()
    {
        throw new Error('Trying to clone an uncloneable database proxy object');
    }
}
