<?php

namespace RobinCorrea\Php8DesignPatterns\Creational\AbstractFactory;

class WoodenHouseFactory implements HouseFactoryInterface
{
    public function createHouse(): HouseInterface
    {
        return new WoodenHouse();
    }
}
