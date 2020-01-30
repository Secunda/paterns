<?php

namespace Adapter;

interface Log
{
    public function write(string $content);
}