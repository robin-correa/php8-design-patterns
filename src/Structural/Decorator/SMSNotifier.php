<?php

namespace RobinCorrea\Php8DesignPatterns\Structural\Decorator;

class SMSNotifier extends NotifierDecorator
{
    public function send(string $message): void
    {
        $this->wrapped->send($message);
        echo "Sending SMS: $message\n";
    }
}
