<?php
/**
* Yaf自动补全类(基于最新的3.0.7版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/04/26
*/

/**
*(Yaf >= 3.0.2)
*Class yaf_Plugin_Abstract
*/
abstract class Yaf_Plugin_Abstract
{
    /**
     * 
     *(Yaf >= 3.0.2)
     *在路由之前触发
     * @example 
     * @param YafX_Request_Abstract $request 当前请求对象
     * @param YafX_Response_Abstract $response 当前响应对象
     * @return 
     */
    public function routerStartup($request, $response)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *路由结束之后触发
     * @example 
     * @param YafX_Request_Abstract $request 当前请求对象
     * @param YafX_Response_Abstract $response 当前响应对象
     * @return 
     */
    public function routerShutdown($request, $response)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *分发循环开始之前被触发
     * @example 
     * @param YafX_Request_Abstract $request 当前请求对象
     * @param YafX_Response_Abstract $response 当前响应对象
     * @return 
     */
    public function dispatchLoopStartup($request, $response)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *分发之前触发
     * @example 
     * @param YafX_Request_Abstract $request 当前请求对象
     * @param YafX_Response_Abstract $response 当前响应对象
     * @return 
     */
    public function preDispatch($request, $response)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *分发结束之后触发
     * @example 
     * @param YafX_Request_Abstract $request 当前请求对象
     * @param YafX_Response_Abstract $response 当前响应对象
     * @return 
     */
    public function postDispatch($request, $response)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *dispatchLoopShutdown
     * @example 
     * @param YafX_Request_Abstract $request 当前请求对象
     * @param YafX_Response_Abstract $response 当前响应对象
     * @return 
     */
    public function dispatchLoopShutdown($request, $response)
    {
    }

}

