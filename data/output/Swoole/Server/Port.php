<?php
/**
* Swoole自动补全类(基于最新的2.0.10版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2017/12/25
*/

/**
*
*/
namespace Swoole\Server;
class Port
{
    /**
     * @var unknown $onConnect 
     * 
     * @access public
     */
    public $onConnect;

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
     * @var unknown $onPacket 
     * 
     * @access public
     */
    public $onPacket;

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
     * @var unknown $onRequest 
     * 
     * @access public
     */
    public $onRequest;

    /**
     * @var unknown $onHandShake 
     * 
     * @access public
     */
    public $onHandShake;

    /**
     * @var unknown $onMessage 
     * 
     * @access public
     */
    public $onMessage;

    /**
     * @var unknown $onOpen 
     * 
     * @access public
     */
    public $onOpen;

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
     * @var unknown $type 
     * 
     * @access public
     */
    public $type    =    0;

    /**
     * @var unknown $sock 
     * 
     * @access public
     */
    public $sock    =    0;

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
     * @return 
     */
    private function __construct()
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
     * @param  mixed $event_name 
     * @param  mixed $callback 
     * @return 
     */
    public function on($event_name, $callback)
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function __sleep()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function __wakeup()
    {
    }

}

