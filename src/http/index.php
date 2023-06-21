<?php
$redis = new Redis();
$redis->connect('redis', 6379);
$redis->auth('redis');

$redis->set('name', 'John doe');

$name = $redis->get('name');

echo "Hello, $name";
