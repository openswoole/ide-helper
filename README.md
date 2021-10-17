# Open Swoole IDE Helper

[![Latest Stable Version](https://poser.pugx.org/openswoole/ide-helper/v/stable.svg)](https://packagist.org/packages/openswoole/ide-helper)
[![License](https://poser.pugx.org/openswoole/ide-helper/license)](LICENSE)

This package contains IDE help files for [Swoole](https://github.com/openswoole/swoole-src). You may use it in your IDE to provide accurate autocompletion. 

## Install

You can add this package to your project using [Composer](https://getcomposer.org):

```bash
composer require openswoole/ide-helper:@dev
# or you can install a specific version, like:
composer require openswoole/ide-helper:~4.7.1
```

It's better to install this package on only development systems by adding the `--dev` flag to your Composer commands:

```bash
composer require --dev openswoole/ide-helper:@dev
# or you can install a specific version, like:
composer require --dev openswoole/ide-helper:~4.7.1
```

## Fix code style before commit

```
./vendor/bin/php-cs-fixer fix
```

## Notes

There are two types of worker processes in use when starting a Swoole server:

1. `event worker`. All requests (HTTP, WebSocket, TCP, UDP, etc.) are handled by this type of processes. It supports coroutine by default; many I/O operations can run asynchronously in it.
2. `task worker`. This type of processes was introduced to handle blocking I/O operations in PHP. Ideally, it should always work synchronously, although it also supports coroutine and allows asynchronous processing (since Swoole v4.2.12+).
