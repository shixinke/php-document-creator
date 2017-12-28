<?php
require_once "../Autoloader.php";

$srcFile = "../data/dict/redis/redis.json";
$dstFile = "../data/dict/swoole/swoole_redis_coro.json";
$content = file_get_contents($srcFile);
$arr = json_decode($content, true);
$methods = array();
foreach ($arr['methods'] as $m => $mValue) {
    $methods[strtolower($m)] = $mValue;
}


$swooleRedis = file_get_contents($dstFile);
$swooleRedisArr = json_decode($swooleRedis, true);
$dstMethods = $swooleRedisArr['methods'];
foreach($dstMethods as $method => $value) {
    $dstMethod = strtolower($method);
    if (!$value['comment'] || $value['comment'] == '') {
        if (isset($methods[$dstMethod])) {
            $dstMethods[$method] = $methods[$dstMethod];
        }
    }
}
$swooleRedisArr['methods'] = $dstMethods;
file_put_contents($dstFile, json_encode($swooleRedisArr, JSON_UNESCAPED_UNICODE));

