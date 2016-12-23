<?php
/**
* Yaf自动补全类(基于最新的3.0.4版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2016/12/23
*/

/**
*
*/
/**
 * php.ini配置选项: 

 * 
 * yaf.library=

 * 
 * yaf.action_prefer=0

 * 
 * yaf.lowcase_path=0

 * 
 * yaf.use_spl_autoload=0

 * 
 * yaf.forward_limit=5

 * 
 * yaf.name_suffix=1

 * 
 * yaf.name_separator=

 * 
 * yaf.st_compatible=0

 * 
 * yaf.environ=dev

 * 
 * yaf.use_namespace=1

*/
/**

*/
define('YAF\VERSION', '3.0.4');
/**

*/
define('YAF\ENVIRON', 'dev');
/**

*/
define('YAF\ERR\STARTUP_FAILED', 512);
/**

*/
define('YAF\ERR\ROUTE_FAILED', 513);
/**

*/
define('YAF\ERR\DISPATCH_FAILED', 514);
/**

*/
define('YAF\ERR\AUTOLOAD_FAILED', 520);
/**

*/
define('YAF\ERR\NOTFOUND\MODULE', 515);
/**

*/
define('YAF\ERR\NOTFOUND\CONTROLLER', 516);
/**

*/
define('YAF\ERR\NOTFOUND\ACTION', 517);
/**

*/
define('YAF\ERR\NOTFOUND\VIEW', 518);
/**

*/
define('YAF\ERR\CALL_FAILED', 519);
/**

*/
define('YAF\ERR\TYPE_ERROR', 521);
