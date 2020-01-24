<?php

namespace Factory;

abstract class DbLog
{
    abstract public function getDb();

    public function log($content)
    {
        $db = $this->getDb();
        $db->auth();
        $db->writeLog($content);
    }
}