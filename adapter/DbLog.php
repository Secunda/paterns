<?php

namespace Adapter;

class DbLog implements Log
{
    /**
     * @var \Factory\Providers\Connectors\MainConnector
     */
    private $adapter;

    public function __construct(\Factory\Providers\Connectors\MainConnector $adapter)
    {
        $this->adapter = $adapter;
        $this->adapter->auth();
    }

    public function write(string $content)
    {
        $this->adapter->writeLog($content);
    }
}