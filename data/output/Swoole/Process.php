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
class Process
{
    /**     
    *
    */
    const IPC_NOWAIT    =    256;

    /**
     * @var unknown $pipe 
     * 
     * @access public
     */
    public $pipe;

    /**
     * @var unknown $callback 
     * 
     * @access public
     */
    public $callback;

    /**
     * @var unknown $msgQueueId 
     * 
     * @access public
     */
    public $msgQueueId;

    /**
     * @var unknown $msgQueueKey 
     * 
     * @access public
     */
    public $msgQueueKey;

    /**
     * @var unknown $pid 
     * 
     * @access public
     */
    public $pid;

    /**
     * @var unknown $id 
     * 
     * @access public
     */
    public $id;

    /**
     * 
     *
     * @example 
     * @param  mixed $callback 
     * @param  mixed $redirect_stdin_and_stdout 
     * @param  mixed $pipe_type 
     * @return 
     */
    public function __construct($callback, $redirect_stdin_and_stdout, $pipe_type)
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
     * @param  mixed $blocking 
     * @return 
     */
    public static  function wait($blocking)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $signal_no 
     * @param  mixed $callback 
     * @return 
     */
    public static  function signal($signal_no, $callback)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $usec 
     * @return 
     */
    public static  function alarm($usec)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $pid 
     * @param  mixed $signal_no 
     * @return 
     */
    public static  function kill($pid, $signal_no)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $nochdir 
     * @param  mixed $noclose 
     * @return 
     */
    public static  function daemon($nochdir, $noclose)
    {
    }

    /**
     * 
     *
     * @example 
     * @param array $cpu_settings 
     * @return 
     */
    public static  function setaffinity(Array $cpu_settings)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $seconds 
     * @return 
     */
    public function setTimeout($seconds)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $key 
     * @param  mixed $mode 
     * @return 
     */
    public function useQueue($key, $mode)
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function statQueue()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function freeQueue()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function start()
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $data 
     * @return 
     */
    public function write($data)
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
     * @param  mixed $size 
     * @return 
     */
    public function read($size)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $data 
     * @return 
     */
    public function push($data)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $size 
     * @return 
     */
    public function pop($size)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $exit_code 
     * @return 
     */
    public function exit($exit_code)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $exec_file 
     * @param  mixed $args 
     * @return 
     */
    public function exec($exec_file, $args)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $process_name 
     * @return 
     */
    public function name($process_name)
    {
    }

}

