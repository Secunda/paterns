<?php

require_once __DIR__ . '/vendor/autoload.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/* FACTORY */

// $mysql = new \Factory\Providers\MysqlProvider('test', 'test');
// $mysql->log('Test log');

// $mysql = new \Factory\Providers\MongoProvider();
// $mysql->log('Test log');

/* ABSTRACT FACTORY */

// $mysqlFactory = new \AbstractFactory\MysqlFactory();
// $userLog = $mysqlFactory->userLog();
// $userLog->setAdapter(new \Factory\Providers\Connectors\MysqlConnector('test', 'test'));
// $userLog->log('User log');

// $dashboardLog = $mysqlFactory->dashboardLog();
// $dashboardLog->setAdapter(new \Factory\Providers\Connectors\MysqlConnector('test', 'test'));
// $dashboardLog->log('Dashboard log');

// $mongoFactory = new \AbstractFactory\MongoFactory();
// $userLog = $mongoFactory->userLog();
// $userLog->setAdapter(new \Factory\Providers\Connectors\MongoConnector());
// $userLog->log('User log');

// $dashboardLog = $mongoFactory->dashboardLog();
// $dashboardLog->setAdapter(new \Factory\Providers\Connectors\MongoConnector());
// $dashboardLog->log('Dashboard log');

/* BUILDER */
// $house = new \Builder\SuperHouse();
// $house->addWalls(4)
//     ->addWindows(3)
//     ->addDoors(2);

// echo $house->getHouse();