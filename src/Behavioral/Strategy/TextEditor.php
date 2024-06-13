<?php

namespace RobinCorrea\Php8DesignPatterns\Behavioral\Strategy;

class TextEditor
{
    private $formatter;

    public function __construct(TextFormatterStrategyInterface $formatter)
    {
        $this->formatter = $formatter;
    }

    public function setFormatter(TextFormatterStrategyInterface $formatter): void
    {
        $this->formatter = $formatter;
    }

    public function show(string $text): string
    {
        return $this->formatter->format($text);
    }
}
