<?php
/**
* Yaf自动补全类(基于最新的3.0.7版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/05/17
*/

/**
*(Yaf >= 3.0.2)
*Class yaf_Action_Abstract
*/
abstract class Yaf_Action_Abstract extends Yaf_Controller_Abstract
{
    /**
     * @var unknown $actions 
     * 
     * @access public
     */
    public $actions;

    /**
     * @var unknown $_module 
     * 
     * @access protected
     */
    protected $_module;

    /**
     * @var unknown $_name 
     * 
     * @access protected
     */
    protected $_name;

    /**
     * @var unknown $_request 
     * 
     * @access protected
     */
    protected $_request;

    /**
     * @var unknown $_response 
     * 
     * @access protected
     */
    protected $_response;

    /**
     * @var unknown $_invoke_args 
     * 
     * @access protected
     */
    protected $_invoke_args;

    /**
     * @var unknown $_view 
     * 
     * @access protected
     */
    protected $_view;

    /**
     * @var unknown $_controller 
     * (Yaf >= 3.0.2)
     * 当前请求的控制器实例
     * @access protected
     */
    protected $_controller;

    /**
     * 
     *(Yaf >= 3.0.2)
     *获取当前请求的控制器实例
     * @example 
     * @return 
     */
    public function getController()
    {
    
}

    /**
     * 
     *(Yaf >= 3.0.2)
     *动作入口方法，由Yaf框架自动调用
     * @example 
     * @return 
     */
    public abstract  function execute();

}

