<?php

namespace Decorator;

class PlainTextFilter extends TextFormat
{
    public function formatText(string $text)
    {
        $text = parent::formatText($text);
        return strip_tags($text);
    }
}