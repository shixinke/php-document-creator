<?php
/**
* Swoole自动补全类(基于最新的2.0.10版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2017/12/25
*/

/**
*
*/
namespace Swoole\Http;
class Client
{
    /**
     * @var unknown $type 
     * 
     * @access public
     */
    public $type    =    0;

    /**
     * @var unknown $errCode 
     * 
     * @access public
     */
    public $errCode    =    0;

    /**
     * @var unknown $sock 
     * 
     * @access public
     */
    public $sock    =    0;

    /**
     * @var unknown $statusCode 
     * 
     * @access public
     */
    public $statusCode    =    0;

    /**
     * @var unknown $host 
     * 
     * @access public
     */
    public $host;

    /**
     * @var unknown $port 
     * 
     * @access public
     */
    public $port    =    0;

    /**
     * @var unknown $requestMethod 
     * 
     * @access public
     */
    public $requestMethod;

    /**
     * @var unknown $requestHeaders 
     * 
     * @access public
     */
    public $requestHeaders;

    /**
     * @var unknown $requestBody 
     * 
     * @access public
     */
    public $requestBody;

    /**
     * @var unknown $uploadFiles 
     * 
     * @access public
     */
    public $uploadFiles;

    /**
     * @var unknown $set_cookie_headers 
     * 
     * @access public
     */
    public $set_cookie_headers;

    /**
     * @var unknown $downloadFile 
     * 
     * @access public
     */
    public $downloadFile;

    /**
     * @var unknown $headers 
     * 
     * @access public
     */
    public $headers;

    /**
     * @var unknown $cookies 
     * 
     * @access public
     */
    public $cookies;

    /**
     * @var unknown $body 
     * 
     * @access public
     */
    public $body;

    /**
     * @var unknown $onConnect 
     * 
     * @access public
     */
    public $onConnect;

    /**
     * @var unknown $onError 
     * 
     * @access public
     */
    public $onError;

    /**
     * @var unknown $onMessage 
     * 
     * @access public
     */
    public $onMessage;

    /**
     * @var unknown $onClose 
     * 
     * @access public
     */
    public $onClose;

    /**
     * 
     *
     * @example 
     * @param  mixed $host 
     * @param  mixed $port 
     * @param  mixed $ssl 
     * @return 
     */
    public function __construct($host, $port, $ssl)
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function __destruct()
    {
    }

    /**
     * 
     *
     * @example 
     * @param array $settings 
     * @return 
     */
    public function set(Array $settings)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $method 
     * @return 
     */
    public function setMethod($method)
    {
    }

    /**
     * 
     *
     * @example 
     * @param array $headers 
     * @return 
     */
    public function setHeaders(Array $headers)
    {
    }

    /**
     * 
     *
     * @example 
     * @param array $cookies 
     * @return 
     */
    public function setCookies(Array $cookies)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $data 
     * @return 
     */
    public function setData($data)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $path 
     * @param  mixed $name 
     * @param  mixed $type 
     * @param  mixed $filename 
     * @param  mixed $offset 
     * @param  mixed $length 
     * @return 
     */
    public function addFile($path, $name, $type, $filename, $offset, $length)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $path 
     * @param  mixed $callback 
     * @return 
     */
    public function execute($path, $callback)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $data 
     * @param  mixed $opcode 
     * @param  mixed $finish 
     * @return 
     */
    public function push($data, $opcode, $finish)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $path 
     * @param  mixed $callback 
     * @return 
     */
    public function get($path, $callback)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $path 
     * @param  mixed $data 
     * @param  mixed $callback 
     * @return 
     */
    public function post($path, $data, $callback)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $path 
     * @param  mixed $callback 
     * @return 
     */
    public function upgrade($path, $callback)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $path 
     * @param  mixed $file 
     * @param  mixed $callback 
     * @param  mixed $offset 
     * @return 
     */
    public function download($path, $file, $callback, $offset)
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function isConnected()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function close()
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $event_name 
     * @param  mixed $callback 
     * @return 
     */
    public function on($event_name, $callback)
    {
    }

}

