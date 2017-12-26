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
class Request
{
    /**
     * @var unknown $fd 
     * 
     * @access public
     */
    public $fd    =    0;

    /**
     * @var unknown $header 
     * 
     * @access public
     */
    public $header;

    /**
     * @var unknown $server 
     * 
     * @access public
     */
    public $server;

    /**
     * @var unknown $request 
     * 
     * @access public
     */
    public $request;

    /**
     * @var unknown $cookie 
     * 
     * @access public
     */
    public $cookie;

    /**
     * @var unknown $get 
     * 
     * @access public
     */
    public $get;

    /**
     * @var unknown $files 
     * 
     * @access public
     */
    public $files;

    /**
     * @var unknown $post 
     * 
     * @access public
     */
    public $post;

    /**
     * @var unknown $tmpfiles 
     * 
     * @access public
     */
    public $tmpfiles;

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function rawcontent()
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

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function __destruct()
    {
    }

}

