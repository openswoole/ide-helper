<?php

declare(strict_types=1);
/**
 * This file is part of OpenSwoole IDE Helper.
 * @link     https://openswoole.com
 * @contact  hello@openswoole.com
 * @license  https://github.com/openswoole/library/blob/master/LICENSE
 */
namespace Swoole\Http;

class Request
{
    public $fd;

    public $header;

    public $server;

    public $cookie;

    public $get;

    public $files;

    public $post;

    public $tmpfiles;

    public function __destruct()
    {
    }

    public function rawContent(): string
    {
    }

    public function getContent(): string
    {
    }

    public function getData(): string
    {
    }

    /**
     * @param array|null $options [required]
     */
    public static function create(?array $options)
    {
    }

    /**
     * @param string $data [required]
     * @return int|false
     */
    public function parse(string $data)
    {
    }

    public function isCompleted(): bool
    {
    }

    public function getMethod(): string
    {
    }
}
