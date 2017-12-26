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
class Lock
{
    /**     
    *
    */
    const FILELOCK    =    2;

    /**     
    *
    */
    const MUTEX    =    3;

    /**     
    *
    */
    const SEM    =    4;

    /**     
    *
    */
    const RWLOCK    =    1;

    /**     
    *
    */
    const SPINLOCK    =    5;

    /**
     * 
     *
     * @example 
     * @param  mixed $type 
     * @param  mixed $filename 
     * @return 
     */
    public function __construct($type, $filename)
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
    public function lock()
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $timeout 
     * @return 
     */
    public function lockwait($timeout)
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function trylock()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function lock_read()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function trylock_read()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function unlock()
    {
    }

}

