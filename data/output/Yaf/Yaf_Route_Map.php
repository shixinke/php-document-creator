<?php
/**
* Yaf自动补全类(基于最新的3.0.7版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/05/18
*/

/**
*(Yaf >= 3.0.2)
*Class yaf_Route_Map
*/
final class Yaf_Route_Map
{
    /**
     * @var unknown $_ctl_router 
     * (Yaf >= 3.0.2)
     * 表示路由结果是作为动作的路由结果，还是控制器的路由结果，默认的是动作路由结果.
     * @access protected
     */
    protected $_ctl_router    =    '';

    /**
     * @var unknown $_delimiter 
     * 
     * @access protected
     */
    protected $_delimiter;

    /**
     * 
     *(Yaf >= 3.0.2)
     *构造方法
     * @example 
     * @param  mixed $controller_prefer 
     * @param  mixed $delim 
     * @param $controller_prefer $boolean 表示路由结果是作为动作的路由结果，还是控制器的路由结果，默认的是动作路由结果.
     * @param $delim $string 表示一个分隔符，如果设置了这个分隔符，那么在REQUEST_URI中，分隔符之前的作为路由信息载体，而之后的作为请求参数.
     * @return 
     */
    public function __construct($controller_prefer = 0, $delim = , $controller_prefer $boolean, $delim $string)
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
     *(Yaf >= 2.3.2)
     *组合uri，路由解析的逆操作
     * @example 
     * @param  mixed $info 
     * @param  mixed $query 
     * @param mixed $ query
     * @return 
     */
    public function assemble($info, $query, $)
    {
    
    }

}

