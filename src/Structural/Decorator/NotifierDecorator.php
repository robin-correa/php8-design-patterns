<?php

namespace RobinCorrea\Php8DesignPatterns\Structural\Decorator;

abstract class NotifierDecorator implements NotifierInterface
{
    protected $wrapped;

    public function __construct(NotifierInterface $notifier)
    {
        $this->wrapped = $notifier;
    }

    abstract public function send(string $message): void;
}
