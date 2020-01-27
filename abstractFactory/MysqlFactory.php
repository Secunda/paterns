<?php

namespace AbstractFactory;

class MysqlFactory implements \AbstractFactory\AbstractFactory
{
    public function userLog()
    {
        return new \AbstractFactory\Logs\UserLog();
    }

    public function dashboardLog()
    {
        return new \AbstractFactory\Logs\DashboardLog();
    }
}