<?php
/**
* Yaf自动补全类(基于最新的3.0.7版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/05/18
*/

/**
*
*/
interface Yaf_Route_Interface
{
    /**
     * 
     *
     * @example 
     * @param  mixed $request 
     * @return 
     */
    public function route($request);

    /**
     * 
     *
     * @example 
     * @param  mixed $info 
     * @param  mixed $query 
     * @return 
     */
    public function assemble($info, $query);

}

