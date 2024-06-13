<?php

namespace RobinCorrea\Php8DesignPatterns\Structural\Facade;

class LoggingService
{
    public function logOrder(string $product, float $amount): string
    {
        return "Order logged for product: $product, amount: $".$amount."\n";
    }
}
