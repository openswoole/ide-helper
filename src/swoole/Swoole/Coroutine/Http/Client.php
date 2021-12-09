<?php

declare(strict_types=1);
/**
 * This file is part of OpenSwoole IDE Helper.
 * @link     https://www.swoole.co.uk
 * @contact  hello@swoole.co.uk
 * @license  https://github.com/openswoole/library/blob/master/LICENSE
 */
namespace Swoole\Coroutine\Http;

class Client
{
    public $errCode;

    public $errMsg;

    public $connected;

    public $host;

    public $port;

    public $ssl;

    public $setting;

    public $requestMethod;

    public $requestHeaders;

    public $requestBody;

    public $uploadFiles;

    public $downloadFile;

    public $downloadOffset;

    public $statusCode;

    public $headers;

    public $set_cookie_headers;

    public $cookies;

    public $body;

    /**
     * @param mixed $host [required]
     * @param mixed $port [optional]
     * @param mixed $ssl [optional]
     */
    public function __construct($host, $port, $ssl)
    {
    }

    public function __destruct()
    {
    }

    /**
     * @param array $settings [required]
     * @return mixed
     */
    public function set(array $settings)
    {
    }

    /**
     * @return mixed
     */
    public function getDefer()
    {
    }

    /**
     * @param mixed $defer [optional]
     * @return mixed
     */
    public function setDefer($defer)
    {
    }

    /**
     * @param mixed $method [required]
     * @return mixed
     */
    public function setMethod($method)
    {
    }

    /**
     * @param array $headers [required]
     * @return mixed
     */
    public function setHeaders(array $headers)
    {
    }

    /**
     * @param mixed $username [required]
     * @param mixed $password [required]
     * @return mixed
     */
    public function setBasicAuth($username, $password)
    {
    }

    /**
     * @param array $cookies [required]
     * @return mixed
     */
    public function setCookies(array $cookies)
    {
    }

    /**
     * @param mixed $data [required]
     * @return mixed
     */
    public function setData($data)
    {
    }

    /**
     * @param mixed $path [required]
     * @param mixed $name [required]
     * @param mixed $type [optional]
     * @param mixed $filename [optional]
     * @param mixed $offset [optional]
     * @param mixed $length [optional]
     * @return mixed
     */
    public function addFile($path, $name, $type, $filename, $offset, $length)
    {
    }

    /**
     * @param mixed $path [required]
     * @param mixed $name [required]
     * @param mixed $type [optional]
     * @param mixed $filename [optional]
     * @return mixed
     */
    public function addData($path, $name, $type, $filename)
    {
    }

    /**
     * @param mixed $path [required]
     * @return mixed
     */
    public function execute($path)
    {
    }

    /**
     * @return mixed
     */
    public function getpeername()
    {
    }

    /**
     * @return mixed
     */
    public function getsockname()
    {
    }

    /**
     * @param mixed $path [required]
     * @return mixed
     */
    public function get($path)
    {
    }

    /**
     * @param mixed $path [required]
     * @param mixed $data [required]
     * @return mixed
     */
    public function post($path, $data)
    {
    }

    /**
     * @param mixed $path [required]
     * @param mixed $file [required]
     * @param mixed $offset [optional]
     * @return mixed
     */
    public function download($path, $file, $offset)
    {
    }

    /**
     * @return mixed
     */
    public function getBody()
    {
    }

    /**
     * @return mixed
     */
    public function getHeaders()
    {
    }

    /**
     * @return mixed
     */
    public function getCookies()
    {
    }

    /**
     * @return mixed
     */
    public function getStatusCode()
    {
    }

    /**
     * @return mixed
     */
    public function getHeaderOut()
    {
    }

    /**
     * @return mixed
     */
    public function getPeerCert()
    {
    }

    /**
     * @param mixed $path [required]
     * @return mixed
     */
    public function upgrade($path)
    {
    }

    /**
     * @param mixed $data [required]
     * @param mixed $opcode [optional]
     * @param mixed $flags [optional]
     * @return mixed
     */
    public function push($data, $opcode, $flags)
    {
    }

    /**
     * @param mixed $timeout [optional]
     * @return mixed
     */
    public function recv($timeout)
    {
    }

    /**
     * @return mixed
     */
    public function close()
    {
    }
}
