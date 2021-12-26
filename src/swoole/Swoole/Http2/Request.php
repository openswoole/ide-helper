<?php

declare(strict_types=1);
/**
 * This file is part of OpenSwoole IDE Helper.
 * @link     https://openswoole.com
 * @contact  hello@openswoole.com
 * @license  https://github.com/openswoole/library/blob/master/LICENSE
 */
namespace Swoole\Http2;

class Request
{
    public $path = '/';

    public $method = 'GET';

    public $headers;

    public $cookies;

    public $data = '';

    public $pipeline = false;
}
