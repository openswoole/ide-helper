<?php

declare(strict_types=1);
/**
 * This file is part of OpenSwoole IDE Helper.
 * @link     https://openswoole.com
 * @contact  hello@openswoole.com
 * @license  https://github.com/openswoole/library/blob/master/LICENSE
 */
namespace Swoole\FastCGI\Record;

use Swoole\FastCGI;
use Swoole\FastCGI\Record;

/**
 * The Web server sends a FCGI_ABORT_REQUEST record to abort a request
 */
class AbortRequest extends Record
{
    public function __construct(int $requestId = 0)
    {
        $this->type = FastCGI::ABORT_REQUEST;
        $this->setRequestId($requestId);
    }
}
