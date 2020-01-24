<?php

namespace Factory\Providers\Connectors;

class MysqlConnector implements MainConnector
{
    private $login;
    private $password;

    private $db;

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function auth()
    {
        $this->db = new \mysqli("localhost:3306", $this->login, $this->password, "mytest");
    }

    public function writeLog($content)
    {
        $this->db->query("INSERT INTO log(content) VALUES ('{$content}')");
    }
}