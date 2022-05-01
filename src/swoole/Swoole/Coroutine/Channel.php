<?php

declare(strict_types=1);
/**
 * This file is part of OpenSwoole IDE Helper.
 * @link     https://openswoole.com
 * @contact  hello@openswoole.com
 * @license  https://github.com/openswoole/library/blob/master/LICENSE
 */
namespace Swoole\Coroutine;

class Channel
{
    public int $id;

    public int $capacity;

    public int $errCode;

    /**
     * @param int $capacity [optional] = 1
     */
    public function __construct(int $capacity = 1)
    {
    }

    /**
     * @param mixed $data [required]
     * @param float $timeout [optional] = -1
     */
    public function push($data, float $timeout = -1): bool
    {
    }

    /**
     * @param float $timeout [optional] = -1
     */
    public function pop(float $timeout = -1): mixed
    {
    }

    public function isEmpty(): bool
    {
    }

    public function isFull(): bool
    {
    }

    public function close(): bool
    {
    }

    public function stats(): array
    {
    }

    public function length(): int
    {
    }

    public function getId(): int
    {
    }
}
