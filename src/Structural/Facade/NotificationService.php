<?php

namespace RobinCorrea\Php8DesignPatterns\Structural\Facade;

class NotificationService
{
    public function notifyCustomer(string $product): string
    {
        return "Customer notified for product: $product\n";
    }
}
