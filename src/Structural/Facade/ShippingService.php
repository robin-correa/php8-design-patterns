<?php

namespace RobinCorrea\Php8DesignPatterns\Structural\Facade;

class ShippingService
{
    public function shipProduct(string $product): string
    {
        return "Product shipped: $product\n";
    }
}
