<?php
/**
* Swoole自动补全类(基于最新的2.1.0版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/02/26
*/

/**
*
*/
namespace Swoole\Coroutine\Http2;
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
     * @var unknown $sock 
     * 
     * @access public
     */
    public $sock    =    0;

    /**
     * @var unknown $reuse 
     * 
     * @access public
     */
    public $reuse    =    '';

    /**
     * @var unknown $reuseCount 
     * 
     * @access public
     */
    public $reuseCount    =    0;

    /**
     * @var unknown $setting 
     * 
     * @access public
     */
    public $setting;

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
     * @return 
     */
    public function connect()
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $request 
     * @return 
     */
    public function send($request)
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function recv()
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $stream_id 
     * @param  mixed $data 
     * @param  mixed $end_stream 
     * @return 
     */
    public function write($stream_id, $data, $end_stream)
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

}

