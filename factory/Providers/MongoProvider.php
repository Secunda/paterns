<?php

namespace Factory\Providers;

class MongoProvider extends \Factory\DbLog
{
    public function getDb()
    {
        return new \Factory\Providers\Connectors\MongoConnector();
    }
}