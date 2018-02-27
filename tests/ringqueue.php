<?php
$queue = Swoole\RingQueue(3);
$queue->push("one");
$queue->push("two");
var_dump($queue->full());
$queue->push("three");
var_dump($queue->full());
