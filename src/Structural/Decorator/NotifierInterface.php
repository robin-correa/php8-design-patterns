<?php

namespace RobinCorrea\Php8DesignPatterns\Structural\Decorator;

interface NotifierInterface
{
    public function send(string $message): void;
}
