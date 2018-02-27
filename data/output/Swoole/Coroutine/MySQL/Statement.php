<?php
/**
* Swoole自动补全类(基于最新的2.1.0版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/02/26
*/

/**
*
*/
namespace Swoole\Coroutine\MySQL;
class Statement
{
    /**
     * @var unknown $affected_rows 
     * 
     * @access public
     */
    public $affected_rows    =    0;

    /**
     * @var unknown $insert_id 
     * 
     * @access public
     */
    public $insert_id    =    0;

    /**
     * @var unknown $error 
     * 
     * @access public
     */
    public $error    =    '';

    /**
     * @var unknown $errno 
     * 
     * @access public
     */
    public $errno    =    0;

    /**
     * 
     *
     * @example 
     * @param  mixed $params 
     * @return 
     */
    public function execute($params)
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

