<?php
/**
* Yaf自动补全类(基于最新的3.0.7版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/05/17
*/

/**
*(Yaf >= 3.0.2)
*Class yaf_Router
*/
final class Yaf_Router
{
    /**
     * @var unknown $_routes 
     * (Yaf >= 3.0.2)
     * 路由器已有的路由协议栈, 默认的栈底总是名为"default"的Route_Static路由协议的实例
     * @access protected
     */
    protected $_routes;

    /**
     * @var unknown $_current 
     * (Yaf >= 3.0.2)
     * 在路由成功后, 路由生效的路由协议实例的索引
     * @access protected
     */
    protected $_current;

    /**
     * 
     *(Yaf >= 3.0.2)
     *构造方法
     * @example 
     * @return 
     */
    public function __construct()
    {
    
}

    /**
     * 
     *(Yaf >= 3.0.2)
     *往Router中添加新的路由
     * @example 
     * @param  mixed $name 
     * @param  mixed $route 
     * @param YafX_Route_Interface $ route
     * @return 
     */
    public function addRoute($name, $route, YafX_Route_Interface $)
    {
    
}

    /**
     * 
     *(Yaf >= 3.0.2)
     *向Router中添加配置文件或者配置数组定义的路由
     * @example 
     * @param  mixed $config 
     * @param $config $Array | YafX_Config_Abstract
     * @return 
     */
    public function addConfig($config, $config $Array)
    {
    
}

    /**
     * 
     *(Yaf >= 3.0.2)
     *路由请求
     * @example 
     * @param  mixed $request 
     * @param YafX_Request_Abstract $ request
     * @return 
     */
    public function route($request, YafX_Request_Abstract $)
    {
    
}

    /**
     * 
     *(Yaf >= 3.0.2)
     *获取路由名对应的路由协议实例
     * @example 
     * @param string $name 路由名
     * @return 
     */
    public function getRoute(string $name)
    {
    
}

    /**
     * 
     *(Yaf >= 3.0.2)
     *获取已注册的所有路由协议
     * @example 
     * @return 
     */
    public function getRoutes()
    {
    
}

    /**
     * 
     *(Yaf >= 3.0.2)
     *获取当前路由成功的路由协议实例
     * @example 
     * @return 
     */
    public function getCurrentRoute()
    {
    
}

}

