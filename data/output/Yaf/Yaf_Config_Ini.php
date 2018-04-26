<?php
/**
* Yaf自动补全类(基于最新的3.0.7版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/04/26
*/

/**
*(Yaf >= 3.0.2)
*Class yaf_Config_Ini
*/
final class Yaf_Config_Ini extends Yaf_Config_Abstract
{
    /**
     * @var unknown $_config 
     * (Yaf >= 3.0.2)
     * 存储已解析的配置
     * @access protected
     */
    protected $_config;

    /**
     * @var unknown $_readonly 
     * (Yaf >= 3.0.2)
     * 配置是否只读，默认为1.
     * @access protected
     */
    protected $_readonly    =    '1';

    /**
     * 
     *(Yaf >= 3.0.2)
     *构造方法，初始化yaf_Config_Ini对象
     * @example 
     * @param string $filename ini文件全路径
     * @param string $section 初始化时的配置节点名称
     * @return 
     */
    public function __construct($filename, $section)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *魔术方法，当isset()检测某个配置节点是否存在时调用
     * @example 
     * @param string $name 节点名称
     * @return 
     */
    public function __isset($name)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *设置配置节点值（无效）
     * @example 
     * @param string $name 变量名
     * @param  mixed $value 
     * @param mixed $ value
     * @return 
     */
    public function set($name, $value, $)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *返回配置节点的数量
     * @example 
     * @return 
     */
    public function count()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *重置遍历位置（php.net文档有误）
     * @example 
     * @return 
     */
    public function rewind()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *返回当前节点
     * @example 
     * @return 
     */
    public function current()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *向前移动到下一个元素
     * @example 
     * @return 
     */
    public function next()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *判断是否可以继续遍历
     * @example 
     * @return 
     */
    public function valid()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *返回当前配置节点的key
     * @example 
     * @return 
     */
    public function key()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *撤消某个配置节点（无效）
     * @example 
     * @param string $name 变量名
     * @return 
     */
    public function offsetUnset($name)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *测某个配置节点是否存在
     * @example 
     * @param mixed $name 节点名称
     * @return 
     */
    public function offsetExists($name)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *设置配置节点值（无效）
     * @example 
     * @param string $name 变量名
     * @param  mixed $value 
     * @param mixed $ value
     * @return 
     */
    public function offsetSet($name, $value, $)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *获取配置节点的值
     *当不传递$name参数时，返回配置对象本身
     * @example 
     * @param  mixed $name 
     * @param string $ name
     * @return 
     */
    public function offsetGet($name, $)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *获取配置节点的值
     *当不传递$name参数时，返回配置对象本身
     * @example 
     * @param  mixed $name 
     * @param string $ name
     * @return 
     */
    public function get($name, $)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *获取配置节点的值
     *当不传递$name参数时，返回配置对象本身
     * @example 
     * @param  mixed $name 
     * @param string $ name
     * @return 
     */
    public function __get($name, $)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *设置配置节点值（无效）
     * @example 
     * @param string $name 变量名
     * @param  mixed $value 
     * @param mixed $ value
     * @return 
     */
    public function __set($name, $value, $)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     * @example 
     * @return 
     */
    public function toArray()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     * @example 
     * @return 
     */
    public function readonly()
    {
    }

}

