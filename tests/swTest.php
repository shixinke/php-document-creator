<?php
$server = new swoole_http_server('0.0.0.0', 9501);
$server->set(array(
    'worker_num'=>2
));

var_dump($server->setting);