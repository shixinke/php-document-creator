<?php
/**
* Yaf自动补全类(基于最新的3.0.7版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/04/26
*/

/**
*(Yaf >= 3.0.2)
*Class yaf_View_Simple
*/
class Yaf_View_Simple
{
    /**
     * @var unknown $_tpl_vars 
     * (Yaf >= 3.0.2)
     * 储存所有模板变量
     * @access protected
     */
    protected $_tpl_vars;

    /**
     * @var unknown $_tpl_dir 
     * (Yaf >= 3.0.2)
     * 模板文件目录
     * @access protected
     */
    protected $_tpl_dir;

    /**
     * @var unknown $_options 
     * (Yaf >= 3.0.2)
     * @access protected
     */
    protected $_options;

    /**
     * 
     *(Yaf >= 3.0.2)
     *构造方法
     * @example 
     * @param string $tpl_dir 模板文件目录
     * @param array $options 此属性在php-5.4以下版本中适用，用以设置模板渲染的方式
     * @return 
     */
    public function __construct($tpl_dir, Array $options)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *当isset检测某个属性是否存在时自动调用（判断是否传递某个模板变量）
     * @example 
     * @param string $name 模板变量名
     * @return 
     */
    public function __isset($name)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *获取某个模板变量的值
     * @example 
     * @param string $name 模板变量名
     * @return 
     */
    public function __get($name)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *获取某个模板变量的值
     * @example 
     * @param string $name 模板变量名
     * @return 
     */
    public function get($name)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *传递变量到模板
     * @example 
     * @param string $name 变量名
     * @param string $value 变量值
     * @return 
     */
    public function __set($name, $value)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *清空某个模板变量的值
     * @example 
     * @param string $name 模板变量名
     * @return 
     */
    public function clear($name)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *传递变量到模板
     * @example 
     * @param string $name 变量名
     * @param string $value 变量值
     * @return 
     */
    public function assign($name, $value)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *以引用的方式传递变量到模板
     * @example 
     * @param string $name 变量名
     * @param string $value 变量值
     * @return 
     */
    public function assignRef($name, $value)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *渲染模板并直接输出
     * @example 
     * @param string $tpl 模板文件名
     * @param  mixed $var_array 
     * @param array $var_ 模板变量
     * @return 
     */
    public function display($tpl, $var_array = [], Array $var_)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *渲染模板并返回结果
     * @example 
     * @param string $tpl 模板文件名
     * @param  mixed $var_array 
     * @param array $var_ 模板变量
     * @return 
     */
    public function render($tpl, $var_array = [], Array $var_)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *设置模板文件目录
     * @example 
     * @param string $tpl_dir 模板文件目录
     * @return 
     */
    public function setScriptPath($tpl_dir)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *获取模板目录文件
     * @example 
     * @return 
     */
    public function getScriptPath()
    {
    }

}

