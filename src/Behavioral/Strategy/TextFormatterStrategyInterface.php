<?php

namespace RobinCorrea\Php8DesignPatterns\Behavioral\Strategy;

interface TextFormatterStrategyInterface
{
    public function format(string $text): string;
}
