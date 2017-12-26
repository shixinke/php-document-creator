<?php
/**
* Swoole自动补全类(基于最新的2.0.10版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2017/12/25
*/

/**
*
*/
namespace Swoole\Redis;
class Server extends \Swoole\Server
{
    /**     
    *
    */
    const NIL    =    1;

    /**     
    *
    */
    const ERROR    =    0;

    /**     
    *
    */
    const STATUS    =    2;

    /**     
    *
    */
    const INT    =    3;

    /**     
    *
    */
    const STRING    =    4;

    /**     
    *
    */
    const SET    =    5;

    /**     
    *
    */
    const MAP    =    6;

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
     * @var unknown $onStart 
     * 
     * @access public
     */
    public $onStart;

    /**
     * @var unknown $onShutdown 
     * 
     * @access public
     */
    public $onShutdown;

    /**
     * @var unknown $onWorkerStart 
     * 
     * @access public
     */
    public $onWorkerStart;

    /**
     * @var unknown $onWorkerStop 
     * 
     * @access public
     */
    public $onWorkerStop;

    /**
     * @var unknown $onWorkerExit 
     * 
     * @access public
     */
    public $onWorkerExit;

    /**
     * @var unknown $onWorkerError 
     * 
     * @access public
     */
    public $onWorkerError;

    /**
     * @var unknown $onTask 
     * 
     * @access public
     */
    public $onTask;

    /**
     * @var unknown $onFinish 
     * 
     * @access public
     */
    public $onFinish;

    /**
     * @var unknown $onManagerStart 
     * 
     * @access public
     */
    public $onManagerStart;

    /**
     * @var unknown $onManagerStop 
     * 
     * @access public
     */
    public $onManagerStop;

    /**
     * @var unknown $onPipeMessage 
     * 
     * @access public
     */
    public $onPipeMessage;

    /**
     * @var unknown $setting 
     * 
     * @access public
     */
    public $setting;

    /**
     * @var unknown $connections 
     * 
     * @access public
     */
    public $connections;

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
     * @var unknown $mode 
     * 
     * @access public
     */
    public $mode    =    0;

    /**
     * @var unknown $ports 
     * 
     * @access public
     */
    public $ports;

    /**
     * @var unknown $master_pid 
     * 
     * @access public
     */
    public $master_pid    =    0;

    /**
     * @var unknown $manager_pid 
     * 
     * @access public
     */
    public $manager_pid    =    0;

    /**
     * @var unknown $worker_id 
     * 
     * @access public
     */
    public $worker_id    =    0;

    /**
     * @var unknown $taskworker 
     * 
     * @access public
     */
    public $taskworker    =    '';

    /**
     * @var unknown $worker_pid 
     * 
     * @access public
     */
    public $worker_pid    =    0;

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
     * @param  mixed $command 
     * @param  mixed $callback 
     * @param  mixed $number_of_string_param 
     * @param  mixed $type_of_array_param 
     * @return 
     */
    public function setHandler($command, $callback, $number_of_string_param, $type_of_array_param)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $type 
     * @param  mixed $value 
     * @return 
     */
    public static  function format($type, $value)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $host 
     * @param  mixed $port 
     * @param  mixed $mode 
     * @param  mixed $sock_type 
     * @return 
     */
    public function __construct($host, $port, $mode, $sock_type)
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
     * @param  mixed $host 
     * @param  mixed $port 
     * @param  mixed $sock_type 
     * @return 
     */
    public function listen($host, $port, $sock_type)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $host 
     * @param  mixed $port 
     * @param  mixed $sock_type 
     * @return 
     */
    public function addlistener($host, $port, $sock_type)
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
     * @param  mixed $fd 
     * @param  mixed $send_data 
     * @param  mixed $reactor_id 
     * @return 
     */
    public function send($fd, $send_data, $reactor_id)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $ip 
     * @param  mixed $port 
     * @param  mixed $send_data 
     * @param  mixed $server_socket 
     * @return 
     */
    public function sendto($ip, $port, $send_data, $server_socket)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $conn_fd 
     * @param  mixed $send_data 
     * @return 
     */
    public function sendwait($conn_fd, $send_data)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $fd 
     * @return 
     */
    public function exist($fd)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $fd 
     * @param  mixed $is_protected 
     * @return 
     */
    public function protect($fd, $is_protected)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $conn_fd 
     * @param  mixed $filename 
     * @param  mixed $offset 
     * @param  mixed $length 
     * @return 
     */
    public function sendfile($conn_fd, $filename, $offset, $length)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $fd 
     * @param  mixed $reset 
     * @return 
     */
    public function close($fd, $reset)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $fd 
     * @return 
     */
    public function confirm($fd)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $fd 
     * @return 
     */
    public function pause($fd)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $fd 
     * @return 
     */
    public function resume($fd)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $data 
     * @param  mixed $worker_id 
     * @param  mixed $finish_callback 
     * @return 
     */
    public function task($data, $worker_id, $finish_callback)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $data 
     * @param  mixed $timeout 
     * @param  mixed $worker_id 
     * @return 
     */
    public function taskwait($data, $timeout, $worker_id)
    {
    }

    /**
     * 
     *
     * @example 
     * @param array $tasks 
     * @param  mixed $timeout 
     * @return 
     */
    public function taskWaitMulti(Array $tasks, $timeout)
    {
    }

    /**
     * 
     *
     * @example 
     * @param array $tasks 
     * @param  mixed $timeout 
     * @return 
     */
    public function taskCo(Array $tasks, $timeout)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $data 
     * @return 
     */
    public function finish($data)
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function reload()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function shutdown()
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $worker_id 
     * @return 
     */
    public function stop($worker_id)
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function getLastError()
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $reactor_id 
     * @return 
     */
    public function heartbeat($reactor_id)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $fd 
     * @param  mixed $reactor_id 
     * @return 
     */
    public function connection_info($fd, $reactor_id)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $start_fd 
     * @param  mixed $find_count 
     * @return 
     */
    public function connection_list($start_fd, $find_count)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $fd 
     * @param  mixed $reactor_id 
     * @return 
     */
    public function getClientInfo($fd, $reactor_id)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $start_fd 
     * @param  mixed $find_count 
     * @return 
     */
    public function getClientList($start_fd, $find_count)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $ms 
     * @param  mixed $callback 
     * @param  mixed $param 
     * @return 
     */
    public function after($ms, $callback, $param)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $ms 
     * @param  mixed $callback 
     * @return 
     */
    public function tick($ms, $callback)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $timer_id 
     * @return 
     */
    public function clearTimer($timer_id)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $callback 
     * @return 
     */
    public function defer($callback)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $dst_worker_id 
     * @param  mixed $data 
     * @return 
     */
    public function sendMessage($dst_worker_id, $data)
    {
    }

    /**
     * 
     *
     * @example 
     * @param swoole_process $process 
     * @return 
     */
    public function addProcess($process)
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function stats()
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $fd 
     * @param  mixed $uid 
     * @return 
     */
    public function bind($fd, $uid)
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

