<?php

declare(strict_types=1);
/**
 * This file is part of OpenSwoole IDE Helper.
 * @link     https://www.swoole.co.uk
 * @contact  hello@swoole.co.uk
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

    public function rawContent(): string|bool
    {
    }

    public function getContent(): string|bool
    {
    }

    public function getData(): string|bool
    {
    }

    /**
     * @param array|null $options [required]
     */
    public static function create(?array $options): Swoole\Http\Request|bool
    {
    }

    /**
     * @param string $data [required]
     */
    public function parse(string $data): int|false
    {
    }

    public function isCompleted(): bool
    {
    }

    public function getMethod(): string|bool
    {
    }
}
