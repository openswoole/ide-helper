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
    public int $fd;

    public array $header;

    public array $server;

    public array $cookie;

    public ?array $get;

    public ?array $files;

    public ?array $post;

    public ?array $tmpfiles;

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
