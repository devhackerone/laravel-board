<?php

$redis = new Redis();

$redis->connect('127.0.0.1', 6379);

$redis->set('key', 1);

$value = $redis->get('key');

var_dump($value);