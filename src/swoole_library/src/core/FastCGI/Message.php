<?php

declare(strict_types=1);
/**
 * This file is part of OpenSwoole IDE Helper.
 * @link     https://openswoole.com
 * @contact  hello@openswoole.com
 * @license  https://github.com/openswoole/library/blob/master/LICENSE
 */
namespace Swoole\FastCGI;

class Message
{
    protected array $params = [];

    protected string $body = '';

    protected string $error = '';

    public function getParam(string $name): ?string
    {
        return $this->params[$name] ?? null;
    }

    public function withParam(string $name, string $value): self
    {
        $this->params[$name] = $value;
        return $this;
    }

    public function withoutParam(string $name): self
    {
        unset($this->params[$name]);
        return $this;
    }

    public function getParams(): array
    {
        return $this->params;
    }

    public function withParams(array $params): self
    {
        $this->params = $params;
        return $this;
    }

    public function withAddedParams(array $params): self
    {
        $this->params = $params + $this->params;
        return $this;
    }

    public function getBody(): string
    {
        return $this->body;
    }

    public function withBody($body): self
    {
        $this->body = (string) $body;
        return $this;
    }

    public function getError(): string
    {
        return $this->error;
    }

    public function withError(string $error): self
    {
        $this->error = $error;
        return $this;
    }
}
