<?php

declare(strict_types=1);
/**
 * This file is part of OpenSwoole IDE Helper.
 * @link     https://openswoole.com
 * @contact  hello@openswoole.com
 * @license  https://github.com/openswoole/library/blob/master/LICENSE
 */
namespace Swoole;

use RuntimeException;
use Swoole\Coroutine\Channel;
use Throwable;

class ConnectionPool
{
    public const DEFAULT_SIZE = 64;

    protected Channel $pool;

    /** @var callable */
    protected $constructor;

    protected int $size;

    protected int $num;

    protected ?string $proxy;

    public function __construct(callable $constructor, int $size = self::DEFAULT_SIZE, ?string $proxy = null)
    {
        $this->pool        = new Channel($this->size = $size);
        $this->constructor = $constructor;
        $this->num         = 0;
        $this->proxy       = $proxy;
    }

    public function fill(): void
    {
        while ($this->size > $this->num) {
            $this->make();
        }
    }

    public function get(float $timeout = -1)
    {
        if (!isset($this->pool)) {
            throw new RuntimeException('Pool has been closed');
        }
        if ($this->pool->isEmpty() && $this->num < $this->size) {
            $this->make();
        }
        return $this->pool->pop($timeout);
    }

    public function put($connection): void
    {
        if (!isset($this->pool)) {
            return;
        }
        if ($connection !== null) {
            $this->pool->push($connection);
        } else {
            /* connection broken */
            $this->num -= 1;
            $this->make();
        }
    }

    public function close(): void
    {
        $this->pool->close();
        unset($this->pool);
        $this->num  = 0;
    }

    protected function make(): void
    {
        $this->num++;
        try {
            if ($this->proxy) {
                $connection = new $this->proxy($this->constructor);
            } else {
                $constructor = $this->constructor;
                $connection  = $constructor();
            }
        } catch (Throwable $throwable) {
            $this->num--;
            throw $throwable;
        }
        $this->put($connection);
    }
}
