<?php

namespace Factory\Providers;

class MysqlProvider extends \Factory\DbLog
{
    private $login;
    private $password;

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function getDb()
    {
        return new \Factory\Providers\Connectors\MysqlConnector($this->login, $this->password);
    }
}