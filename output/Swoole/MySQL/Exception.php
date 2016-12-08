<?php
/**
* Swoole自动补全类(基于最新的2.0.1版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2016/12/08
*/

/**
*
*/
namespace Swoole\MySQL;
class Exception extends \Exception
{
    /**
     * @var unknown $message 
     *
     */
    protected $message    =    '';
    /**
     * @var unknown $code 
     *
     */
    protected $code    =    0;
    /**
     * @var unknown $file 
     *
     */
    protected $file;
    /**
     * @var unknown $line 
     *
     */
    protected $line;
    /**
     * 
     *
     * @example 
     * @return 
     */
    private final  function __clone()
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $message 
     * @param  mixed $code 
     * @param  mixed $previous 
     * @return 
     */
    public function __construct($message, $code, $previous)
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
    public final  function getMessage()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public final  function getCode()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public final  function getFile()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public final  function getLine()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public final  function getTrace()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public final  function getPrevious()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public final  function getTraceAsString()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function __toString()
    {
    }

}

