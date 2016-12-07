<?php
/**
* Redis自动补全类(基于最新的3.0.0版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2016/12/07
*/

/**
*
*/
class RedisCluster
{
    /**     
    *
    */
    const REDIS_NOT_FOUND    =    0;

    /**     
    *
    */
    const REDIS_STRING    =    1;

    /**     
    *
    */
    const REDIS_SET    =    2;

    /**     
    *
    */
    const REDIS_LIST    =    3;

    /**     
    *
    */
    const REDIS_ZSET    =    4;

    /**     
    *
    */
    const REDIS_HASH    =    5;

    /**     
    *
    */
    const ATOMIC    =    0;

    /**     
    *
    */
    const MULTI    =    1;

    /**     
    *
    */
    const OPT_SERIALIZER    =    1;

    /**     
    *
    */
    const OPT_PREFIX    =    2;

    /**     
    *
    */
    const OPT_READ_TIMEOUT    =    3;

    /**     
    *
    */
    const SERIALIZER_NONE    =    0;

    /**     
    *
    */
    const SERIALIZER_PHP    =    1;

    /**     
    *
    */
    const OPT_SCAN    =    4;

    /**     
    *
    */
    const SCAN_RETRY    =    1;

    /**     
    *
    */
    const SCAN_NORETRY    =    0;

    /**     
    *
    */
    const OPT_SLAVE_FAILOVER    =    5;

    /**     
    *
    */
    const FAILOVER_NONE    =    0;

    /**     
    *
    */
    const FAILOVER_ERROR    =    1;

    /**     
    *
    */
    const FAILOVER_DISTRIBUTE    =    2;

    /**     
    *
    */
    const AFTER    =    'after';

    /**     
    *
    */
    const BEFORE    =    'before';

    /**
     * 
     * @example 
     * @return 
     */
    public function __construct()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function close()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function get()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function set()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function mget()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function mset()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function msetnx()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function del()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function setex()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function psetex()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function setnx()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function getset()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function exists()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function keys()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function type()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function lpop()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function rpop()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function lset()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function spop()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function lpush()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function rpush()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function blpop()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function brpop()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function rpushx()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function lpushx()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function linsert()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function lindex()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function lrem()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function brpoplpush()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function rpoplpush()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function llen()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function scard()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function smembers()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function sismember()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function sadd()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function saddarray()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function srem()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function sunion()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function sunionstore()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function sinter()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function sinterstore()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function sdiff()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function sdiffstore()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function srandmember()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function strlen()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function persist()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function ttl()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function pttl()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function zcard()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function zcount()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function zremrangebyscore()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function zscore()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function zadd()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function zincrby()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function hlen()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function hkeys()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function hvals()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function hget()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function hgetall()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function hexists()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function hincrby()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function hset()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function hsetnx()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function hmget()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function hmset()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function hdel()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function hincrbyfloat()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function dump()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function zrank()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function zrevrank()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function incr()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function decr()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function incrby()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function decrby()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function incrbyfloat()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function expire()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function pexpire()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function expireat()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function pexpireat()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function append()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function getbit()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function setbit()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function bitop()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function bitpos()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function bitcount()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function lget()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function getrange()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function ltrim()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function lrange()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function zremrangebyrank()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function publish()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function rename()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function renamenx()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function pfcount()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function pfadd()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function pfmerge()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function setrange()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function restore()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function smove()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function zrange()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function zrevrange()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function zrangebyscore()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function zrevrangebyscore()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function zrangebylex()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function zrevrangebylex()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function zlexcount()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function zremrangebylex()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function zunionstore()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function zinterstore()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function zrem()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function sort()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function object()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function subscribe()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function psubscribe()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function unsubscribe()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function punsubscribe()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function eval()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function evalsha()
    {
    }

    /**
     * 
     * @example 
     * @param  mixed i_iterator 
     * @param  mixed str_node 
     * @param  mixed str_pattern 
     * @param  mixed i_count 
     * @return 
     */
    public function scan($i_iterator, $str_node, $str_pattern, $i_count)
    {
    }

    /**
     * 
     * @example 
     * @param  mixed str_key 
     * @param  mixed i_iterator 
     * @param  mixed str_pattern 
     * @param  mixed i_count 
     * @return 
     */
    public function sscan($str_key, $i_iterator, $str_pattern, $i_count)
    {
    }

    /**
     * 
     * @example 
     * @param  mixed str_key 
     * @param  mixed i_iterator 
     * @param  mixed str_pattern 
     * @param  mixed i_count 
     * @return 
     */
    public function zscan($str_key, $i_iterator, $str_pattern, $i_count)
    {
    }

    /**
     * 
     * @example 
     * @param  mixed str_key 
     * @param  mixed i_iterator 
     * @param  mixed str_pattern 
     * @param  mixed i_count 
     * @return 
     */
    public function hscan($str_key, $i_iterator, $str_pattern, $i_count)
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function getmode()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function getlasterror()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function clearlasterror()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function getoption()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function setoption()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function _prefix()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function _serialize()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function _unserialize()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function _masters()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function _redir()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function multi()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function exec()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function discard()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function watch()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function unwatch()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function save()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function bgsave()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function flushdb()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function flushall()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function dbsize()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function bgrewriteaof()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function lastsave()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function info()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function role()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function time()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function randomkey()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function ping()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function echo()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function command()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function rawcommand()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function cluster()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function client()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function config()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function pubsub()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function script()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function slowlog()
    {
    }

}

