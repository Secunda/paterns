<?php

namespace Factory\Providers\Connectors;

class MongoConnector implements MainConnector
{
    private $collection;

    public function auth()
    {
        $client = new \MongoDB\Client("mongodb://localhost:27017");
        $this->collection = $client->mytest->log;
    }

    public function writeLog($content)
    {
        $this->collection->insertOne([
            'content' => $content, 
            'date_create' => (new \DateTime())->format('Y-m-d\TH:i:s.u')
        ]);
    }
}