<?php

namespace RobinCorrea\Php8DesignPatterns\Structural\Decorator;

class EmailNotifier implements NotifierInterface
{
    public function send(string $message): void
    {
        echo "Sending email: $message\n";
    }
}
