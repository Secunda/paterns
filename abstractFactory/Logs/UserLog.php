<?php 

namespace AbstractFactory\Logs;

class UserLog implements \AbstractFactory\Logs\AbstractLog
{
    /**
     * Log storage adapter
     *
     * @var \Factory\Providers\Connectors\MainConnector
     */
    private $adapter;

    public function prepareLog(string $content)
    {
        return date("c") . "[USER] - " . $content;
    }

    public function log(string $content)
    {
        $this->adapter->auth();
        $this->adapter->writeLog($this->prepareLog($content));
    }

    public function setAdapter(\Factory\Providers\Connectors\MainConnector $adapter)
    {
        $this->adapter = $adapter;

        return $this;
    }
}