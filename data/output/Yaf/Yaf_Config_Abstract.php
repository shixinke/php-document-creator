<?php
/**
* Yaf自动补全类(基于最新的3.0.7版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/05/18
*/

/**
*(Yaf >= 3.0.2)
*Class yaf_Config_Abstract
*/
abstract class Yaf_Config_Abstract
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
     *获取配置节点的值
     *当不传递$name参数时，返回配置对象本身
     * @example 
     * @param  mixed $name 
     * @param string $ name
     * @return 
     */
    public abstract  function get($name, string $);

    /**
     * 
     *(Yaf >= 3.0.2)
     *设置配置节点的值
     * @example 
     * @param  mixed $name 
     * @param  mixed $value 
     * @param mixed $ value
     * @return 
     */
    public abstract  function set($name, $value, $);

    /**
     * 
     *(Yaf >= 3.0.2)
     *返回配置只读的状态
     * @example 
     * @return 
     */
    public abstract  function readonly();

    /**
     * 
     *(Yaf >= 3.0.2)
     *将配置转换为数组
     * @example 
     * @return 
     */
    public abstract  function toArray();

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
    public function __get($name, string $)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public abstract  function current();

    /**
     * 
     *
     * @example 
     * @return 
     */
    public abstract  function next();

    /**
     * 
     *
     * @example 
     * @return 
     */
    public abstract  function key();

    /**
     * 
     *
     * @example 
     * @return 
     */
    public abstract  function valid();

    /**
     * 
     *
     * @example 
     * @return 
     */
    public abstract  function rewind();

    /**
     * 
     *
     * @example 
     * @return 
     */
    public abstract  function count();

    /**
     * 
     *
     * @example 
     * @param  mixed $offset 
     * @return 
     */
    public abstract  function offsetExists($offset);

    /**
     * 
     *
     * @example 
     * @param  mixed $offset 
     * @return 
     */
    public abstract  function offsetGet($offset);

    /**
     * 
     *
     * @example 
     * @param  mixed $offset 
     * @param  mixed $value 
     * @return 
     */
    public abstract  function offsetSet($offset, $value);

    /**
     * 
     *
     * @example 
     * @param  mixed $offset 
     * @return 
     */
    public abstract  function offsetUnset($offset);

}

