<?php

namespace AbstractFactory\Logs;

interface AbstractLog
{
    public function prepareLog(string $content);

    public function log(string $content);

    public function setAdapter(\Factory\Providers\Connectors\MainConnector $adapter);
}