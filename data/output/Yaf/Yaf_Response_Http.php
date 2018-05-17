<?php
/**
* Yaf自动补全类(基于最新的3.0.7版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/05/17
*/

/**
*(Yaf >= 3.0.2)
*Class yaf_Response_Http
*/
class Yaf_Response_Http extends Yaf_Response_Abstract
{
    /**     
    *
    */
    const DEFAULT_BODY    =    'content';

    /**
     * @var unknown $_header 
     * (Yaf >= 3.0.2)
     * 响应报头
     * @access protected
     */
    protected $_header;

    /**
     * @var unknown $_body 
     * (Yaf >= 3.0.2)
     * 响应正文
     * @access protected
     */
    protected $_body;

    /**
     * @var unknown $_sendheader 
     * (Yaf >= 3.0.2)
     * 是否开启已输出响应报头检测
     * @access protected
     */
    protected $_sendheader    =    '1';

    /**
     * @var unknown $_response_code 
     * (Yaf >= 3.0.2)
     * 响应状态码
     * @access protected
     */
    protected $_response_code    =    0;

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
     *析构方法
     * @example 
     * @return 
     */
    public function __destruct()
    {
    
}

    /**
     * 
     *(Yaf >= 3.0.2)
     *重置__clone魔术方法
     * @example 
     * @return 
     */
    private function __clone()
    {
    
}

    /**
     * 
     *(Yaf >= 3.0.2)
     *返回响应正文的字符串
     * @example 
     * @return 
     */
    public function __toString()
    {
    
}

    /**
     * 
     *(Yaf >= 3.0.2)
     *设置类型为$name的响应正文内容
     * @example 
     * @param string $body 响应正文内容（可覆盖原来的）
     * @param string $name 响应正文类型，默认为content
     * @return 
     */
    public function setBody(string $body, string $name = content)
    {
    
}

    /**
     * 
     *(Yaf >= 3.0.2)
     *获取类型为$name的响应正文内容
     * @example 
     * @param string $name 响应正文类型，默认为content
     * @return 
     */
    public function getBody(string $name = content)
    {
    
}

    /**
     * 
     *(Yaf >= 3.0.2)
     *设置类型为$name的响应正文内容, 如已存在，则追加到原来正文的后面
     * @example 
     * @param string $body 响应正文内容（可追加）
     * @param string $name 响应正文类型，默认为content
     * @return 
     */
    public function appendBody(string $body, string $name)
    {
    
}

    /**
     * 
     *(Yaf >= 3.0.2)
     *设置类型为$name的响应正文内容, 如已存在，则追加到原来正文的前面
     * @example 
     * @param string $body 响应正文内容（可追加）
     * @param string $name 响应正文类型，默认为content
     * @return 
     */
    public function prependBody(string $body, string $name)
    {
    
}

    /**
     * 
     *(Yaf >= 3.0.2)
     *清空响应正文
     * @example 
     * @return 
     */
    public function clearBody()
    {
    
}

    /**
     * 
     *(Yaf >= 3.0.2)
     *获取响应报头
     * @example 
     * @return 
     */
    public function getHeader()
    {
    
}

    /**
     * 
     *(Yaf >= 3.0.2)
     *获取所有响应报头
     * @example 
     * @return 
     */
    public function setAllHeaders()
    {
    
}

    /**
     * 
     *(Yaf >= 3.0.2)
     *设置响应报头
     * @example 
     * @return 
     */
    public function setHeader()
    {
    
}

    /**
     * 
     *(Yaf >= 3.0.2)
     *清空响应报头
     * @example 
     * @return 
     */
    public function clearHeaders()
    {
    
}

    /**
     * 
     *(Yaf >= 3.0.2)
     *将当前请求重定向到指定的URL（内部实现是通过发送Location报头实现，如：header("Location:http//www.phpboy.net/"））
     * @example 
     * @param string $url 重定向的绝对URL
     * @return 
     */
    public function setRedirect(string $url)
    {
    
}

    /**
     * 
     *(Yaf >= 3.0.2)
     *输出所有的响应正文
     * @example 
     * @return 
     */
    public function response()
    {
    
}

}

