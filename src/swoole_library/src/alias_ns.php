<?php

declare(strict_types=1);
/**
 * This file is part of OpenSwoole IDE Helper.
 * @link     https://openswoole.com
 * @contact  hello@openswoole.com
 * @license  https://github.com/openswoole/library/blob/master/LICENSE
 */
namespace Co;

use Swoole\Coroutine;

if (SWOOLE_USE_SHORTNAME) {
    function run(callable $fn, ...$args)
    {
        return \Swoole\Coroutine\run($fn, ...$args);
    }

    function go(callable $fn, ...$args)
    {
        return Coroutine::create($fn, ...$args);
    }

    function defer(callable $fn)
    {
        Coroutine::defer($fn);
    }
}
