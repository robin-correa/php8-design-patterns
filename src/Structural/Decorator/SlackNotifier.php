<?php

namespace RobinCorrea\Php8DesignPatterns\Structural\Decorator;

class SlackNotifier extends NotifierDecorator
{
    public function send(string $message): void
    {
        $this->wrapped->send($message);
        echo "Sending Slack message: $message\n";
    }
}
