<?php

namespace Decorator;

class TextInput implements InputFormat
{
    public function formatText(string $text)
    {
        return $text;
    }
}