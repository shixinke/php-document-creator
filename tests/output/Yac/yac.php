<?php
/**
* Yac自动补全类(基于最新的2.0.1版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2016/12/23
*/

/**
*Yac是一个用于PHP的共享和无锁存储器用户数据缓存.它可以用于替换APC或本地memcached。
*注：目前它还不是稳定版。因为是无锁的，这意味着，有时候你可能得到一个错误的数据（这取决于分配了多少个键槽和有多少键存储），所以你最好确保你的产品不是很敏感
*/
/**
 * php.ini配置选项: 

 * 是否启用yac
 * yac.enable=1

 * 是否开启yac的debug模式
 * yac.debug=0

 * yac的键所占用的总的内存大小
 * yac.keys_memory_size=4M

 * yac的键值所占用的总的内存大小
 * yac.values_memory_size=64M

 * yac缓存压缩开关
 * yac.compress_threshold=-1

 * 是否启用yac的cli
 * yac.enable_cli=0

*/
/**
yac 版本
*/
define('YAC_VERSION', '2.0.1');
/**
yac 键的最大长度
*/
define('YAC_MAX_KEY_LEN', 48);
/**
yac 键值的最大长度
*/
define('YAC_MAX_VALUE_RAW_LEN', 67108863);
/**
yac 原始数据的最大压缩长度
*/
define('YAC_MAX_RAW_COMPRESSED_LEN', 1048576);
/**
yac使用的序列化方法
*/
define('YAC_SERIALIZER', 'PHP');
