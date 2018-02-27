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
class Request
{
    /**
     * @var unknown $method 
     * 
     * @access public
     */
    public $method;

    /**
     * @var unknown $headers 
     * 
     * @access public
     */
    public $headers;

    /**
     * @var unknown $data 
     * 
     * @access public
     */
    public $data;

    /**
     * @var unknown $pipeline 
     * 
     * @access public
     */
    public $pipeline    =    '';

    /**
     * @var unknown $files 
     * 
     * @access public
     */
    public $files;

}

