<?php

namespace Decorator;

class TextFormat implements InputFormat
{
    protected $inputFormat;

    public function __construct(InputFormat $inputFormat)
    {
        $this->inputFormat = $inputFormat;
    }

    public function formatText(string $text)
    {
        return $this->inputFormat->formatText($text);
    }
}