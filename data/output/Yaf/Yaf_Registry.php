<?php
/**
* Yaf自动补全类(基于最新的3.0.7版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/04/26
*/

/**
*(Yaf >= 3.0.2)
*Class yaf_Registry
*/
final class Yaf_Registry
{
    /**
     * @var unknown $_instance 
     * (Yaf >= 3.0.2)
     * Registry实例（单例模式）
     * @access protected
     */
    protected static  $_instance;

    /**
     * @var unknown $_entries 
     * (Yaf >= 3.0.2)
     * 注册变量栈
     * @access protected
     */
    protected $_entries;

    /**
     * 
     *(Yaf >= 3.0.2)
     *重置__construct魔术方法.
     * @example 
     * @return 
     */
    private function __construct()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *重置__clone魔术方法，防止克隆Dispatcher（因为是单例模式）.
     * @example 
     * @return 
     */
    private function __clone()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *获取注册变量值
     * @example 
     * @param string $name 变量名
     * @return 
     */
    public static  function get($name)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *检测变量是否存在
     * @example 
     * @param string $name 变量名
     * @return 
     */
    public static  function has($name)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *注册变量
     * @example 
     * @param string $name 变量名
     * @param mixed $value 变量值
     * @return 
     */
    public static  function set($name, $value)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *删除变量
     * @example 
     * @param  mixed $name 
     * @param string $ name
     * @return 
     */
    public static  function del($name, $)
    {
    }

}

