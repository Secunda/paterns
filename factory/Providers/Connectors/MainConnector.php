<?php

namespace Factory\Providers\Connectors;

interface MainConnector
{
    public function auth();

    public function writeLog($content);
}