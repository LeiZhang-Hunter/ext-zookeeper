--TEST--
swoole_zookeeper: test new instance
--SKIPIF--
<?php 
require __DIR__ . '/../inc/skipif.inc';
require __DIR__ . '/../inc/bootstrap.php';
--FILE--
<?php
require __DIR__ . '/../inc/bootstrap.php';

use swoole\zookeeper;

go(function () {
    zookeeper::setDebugLevel(1);
    $zk = new zookeeper(TEST_ZOOKEEPER_FULL_URL, TEST_ZOOKEEPER_TIMEOUT);
    var_dump($zk instanceof zookeeper);
});
--EXPECTF--
bool(true)