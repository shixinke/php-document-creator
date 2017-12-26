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
class MySQL
{
    /**     
    *
    */
    const STATE_QUERY    =    0;

    /**     
    *
    */
    const STATE_READ_START    =    1;

    /**     
    *
    */
    const STATE_READ_FIELD     =    2;

    /**     
    *
    */
    const STATE_READ_ROW    =    3;

    /**     
    *
    */
    const STATE_READ_END    =    4;

    /**     
    *
    */
    const STATE_CLOSED    =    5;

    /**
     * @var unknown $serverInfo 
     * 
     * @access public
     */
    public $serverInfo;

    /**
     * @var unknown $sock 
     * 
     * @access public
     */
    public $sock;

    /**
     * @var unknown $connected 
     * 
     * @access public
     */
    public $connected    =    '';

    /**
     * @var unknown $errno 
     * 
     * @access public
     */
    public $errno    =    0;

    /**
     * @var unknown $connect_errno 
     * 
     * @access public
     */
    public $connect_errno    =    0;

    /**
     * @var unknown $error 
     * 
     * @access public
     */
    public $error;

    /**
     * @var unknown $connect_error 
     * 
     * @access public
     */
    public $connect_error;

    /**
     * @var unknown $insert_id 
     * 
     * @access public
     */
    public $insert_id;

    /**
     * @var unknown $affected_rows 
     * 
     * @access public
     */
    public $affected_rows;

    /**
     * @var unknown $onConnect 
     * 
     * @access public
     */
    public $onConnect;

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
     * @return 
     */
    public function __construct()
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
     * @param array $server_config 
     * @param  mixed $callback 
     * @return 
     */
    public function connect(Array $server_config, $callback)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $callback 
     * @return 
     */
    public function begin($callback)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $callback 
     * @return 
     */
    public function commit($callback)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $callback 
     * @return 
     */
    public function rollback($callback)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $sql 
     * @param  mixed $callback 
     * @return 
     */
    public function query($sql, $callback)
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
     * @return 
     */
    public function getState()
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

