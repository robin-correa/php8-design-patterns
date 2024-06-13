<?php

namespace RobinCorrea\Php8DesignPatterns\Behavioral\Strategy;

class HtmlFormatter implements TextFormatterStrategyInterface
{
    public function format(string $text): string
    {
        return '<p>'.htmlspecialchars($text).'</p>';
    }
}
