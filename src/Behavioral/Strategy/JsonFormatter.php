<?php

namespace RobinCorrea\Php8DesignPatterns\Behavioral\Strategy;

class JsonFormatter implements TextFormatterStrategyInterface
{
    public function format(string $text): string
    {
        return json_encode(['text' => $text], JSON_PRETTY_PRINT);
    }
}
