<?php

declare(strict_types=1);
/**
 * This file is part of OpenSwoole IDE Helper.
 * @link     https://www.swoole.co.uk
 * @contact  hello@swoole.co.uk
 * @license  https://github.com/openswoole/library/blob/master/LICENSE
 */
namespace Swoole\Http2;

class Response
{
    public $streamId = 0;

    public $errCode = 0;

    public $statusCode = 0;

    public $pipeline = false;

    public $headers;

    public $set_cookie_headers;

    public $cookies;

    public $data;
}
