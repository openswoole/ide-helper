<?php

declare(strict_types=1);
/**
 * This file is part of OpenSwoole IDE Helper.
 * @link     https://openswoole.com
 * @contact  hello@openswoole.com
 * @license  https://github.com/openswoole/library/blob/master/LICENSE
 */
namespace Swoole;

class MultibyteStringObject extends StringObject
{
    public function length(): int
    {
        return mb_strlen($this->string);
    }

    /**
     * @return false|int
     */
    public function indexOf(string $needle, int $offset = 0, ?string $encoding = null)
    {
        return mb_strpos($this->string, ...func_get_args());
    }

    /**
     * @return false|int
     */
    public function lastIndexOf(string $needle, int $offset = 0, ?string $encoding = null)
    {
        return mb_strrpos($this->string, ...func_get_args());
    }

    /**
     * @return false|int
     */
    public function pos(string $needle, int $offset = 0, ?string $encoding = null)
    {
        return mb_strpos($this->string, ...func_get_args());
    }

    /**
     * @return false|int
     */
    public function rpos(string $needle, int $offset = 0, ?string $encoding = null)
    {
        return mb_strrpos($this->string, ...func_get_args());
    }

    /**
     * @return false|int
     */
    public function ipos(string $needle, ?string $encoding = null)
    {
        return mb_stripos($this->string, ...func_get_args());
    }

    /**
     * @return static
     */
    public function substr(int $offset, ?int $length = null, ?string $encoding = null)
    {
        return new static(mb_substr($this->string, ...func_get_args()));
    }

    public function chunk(int $splitLength = 1, ?int $limit = null): ArrayObject
    {
        return static::detectArrayType(mb_split($this->string, ...func_get_args()));
    }
}
