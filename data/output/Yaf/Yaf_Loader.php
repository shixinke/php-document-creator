<?php
/**
* Yaf自动补全类(基于最新的3.0.7版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/05/18
*/

/**
*(Yaf >= 3.0.2)
*Class yaf_Loader
*/
final class Yaf_Loader
{
    /**
     * @var unknown $_library 
     * (Yaf >= 3.0.2)
     * 当前应用本地类库目录
     * @access protected
     */
    protected $_library;

    /**
     * @var unknown $_global_library 
     * (Yaf >= 3.0.2)
     * 全局类库目录
     * @access protected
     */
    protected $_global_library;

    /**
     * @var unknown $_instance 
     * (Yaf >= 3.0.2)
     * 当前Loader实例（单例模式）
     * @access protected
     */
    protected static  $_instance;

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
     *重置__clone魔术方法，防止克隆yaf_Loader（因为是单例模式）.
     * @example 
     * @return 
     */
    private function __clone()
    {
    
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *重置__destruct魔术方法.
     * @example 
     * @return 
     */
    public function __destruct()
    {
    
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *重置__sleep魔术方法.
     * @example 
     * @return 
     */
    private function __sleep()
    {
    
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *重置__wakeup魔术方法.
     * @example 
     * @return 
     */
    private function __wakeup()
    {
    
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *自动装载类
     * @example 
     * @param  mixed $class 
     * @param $class $string 类名
     * @return 
     */
    public function autoload($class, $class $string)
    {
    
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *获取yaf_Loader实例
     * @example 
     * @param string $library 本地类库目录
     * @param string $global 全局类库目录
     * @return 
     */
    public static  function getInstance(string $library, string $global)
    {
    
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *注册本地类前缀
     * @example 
     * @param mixed $namespace 一个或者多个类前缀
     * @return 
     */
    public function registerLocalNamespace($namespace)
    {
    
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *获取当前已经注册的本地类前缀
     * @example 
     * @return 
     */
    public function getLocalNamespace()
    {
    
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *清空已注册的本地类前缀
     * @example 
     * @return 
     */
    public function clearLocalNamespace()
    {
    
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *判断一个类, 是否是本地类.
     * @example 
     * @param  mixed $class_name 
     * @param $class_name $string 类名
     * @return 
     */
    public function isLocalName($class_name, $class_name $string)
    {
    
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *手动导入文件
     * @example 
     * @param  mixed $file 
     * @param $file $string include的全路径文件名
     * @return 
     */
    public static  function import($file, $file $string)
    {
    
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *设置本地或者全局类库目录
     * @example 
     * @param string $library 目录路径
     * @param boolean $global 是否为全局类库
     * @return 
     */
    public function setLibraryPath(string $library, boolean $global = )
    {
    
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *获取本地或者全局类库目录
     * @example 
     * @param  mixed $global 
     * @param boolean $ global
     * @return 
     */
    public function getLibraryPath($global = , boolean $)
    {
    
    }

}

