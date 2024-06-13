<?php

namespace RobinCorrea\Php8DesignPatterns\Structural\Facade;

class InventoryService
{
    public function checkStock(string $product): string
    {
        return "Stock checked for: $product\n";
    }
}
