<?php

namespace Decorator;

class NoDigitsFilter extends TextFormat
{
    public function formatText(string $text)
    {
        $text = parent::formatText($text);
        return preg_replace('/[0-9]+/', '', $text);
    }
}