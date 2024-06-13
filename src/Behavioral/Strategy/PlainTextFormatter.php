<?php

namespace RobinCorrea\Php8DesignPatterns\Behavioral\Strategy;

class PlainTextFormatter implements TextFormatterStrategyInterface
{
    public function format(string $text): string
    {
        return $text;
    }
}
