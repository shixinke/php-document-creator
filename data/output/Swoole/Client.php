<?php
/**
* Swoole自动补全类(基于最新的2.0.10版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2017/12/25
*/

/**
*
*/
namespace Swoole;
class Client
{
    /**     
    *
    */
    const MSG_OOB    =    1;

    /**     
    *
    */
    const MSG_PEEK    =    2;

    /**     
    *
    */
    const MSG_DONTWAIT    =    64;

    /**     
    *
    */
    const MSG_WAITALL    =    256;

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
     * @var unknown $type 
     * 
     * @access public
     */
    public $type    =    0;

    /**
     * @var unknown $id 
     * 
     * @access public
     */
    public $id    =    0;

    /**
     * @var unknown $setting 
     * 
     * @access public
     */
    public $setting;

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
     * @var unknown $onReceive 
     * 
     * @access public
     */
    public $onReceive;

    /**
     * @var unknown $onClose 
     * 
     * @access public
     */
    public $onClose;

    /**
     * @var unknown $onBufferFull 
     * 
     * @access public
     */
    public $onBufferFull;

    /**
     * @var unknown $onBufferEmpty 
     * 
     * @access public
     */
    public $onBufferEmpty;

    /**
     * 
     *
     * @example 
     * @param  mixed $type 
     * @param  mixed $async 
     * @return 
     */
    public function __construct($type, $async)
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
     * @param  mixed $host 
     * @param  mixed $port 
     * @param  mixed $timeout 
     * @param  mixed $sock_flag 
     * @return 
     */
    public function connect($host, $port, $timeout, $sock_flag)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $size 
     * @param  mixed $flag 
     * @return 
     */
    public function recv($size, $flag)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $data 
     * @param  mixed $flag 
     * @return 
     */
    public function send($data, $flag)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $dst_socket 
     * @return 
     */
    public function pipe($dst_socket)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $filename 
     * @param  mixed $offset 
     * @param  mixed $length 
     * @return 
     */
    public function sendfile($filename, $offset, $length)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $ip 
     * @param  mixed $port 
     * @param  mixed $data 
     * @return 
     */
    public function sendto($ip, $port, $data)
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function sleep()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function wakeup()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function pause()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function resume()
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
    public function getsockname()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function getpeername()
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $force 
     * @return 
     */
    public function close($force)
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

