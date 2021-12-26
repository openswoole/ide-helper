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
 * Stdin binary stream
 *
 * FCGI_STDIN is a stream record type used in sending arbitrary data from the Web server to the application
 */
class Stdin extends Record
{
    public function __construct(string $contentData = '')
    {
        $this->type = FastCGI::STDIN;
        $this->setContentData($contentData);
    }
}
