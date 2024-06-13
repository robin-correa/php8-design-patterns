<?php

namespace RobinCorrea\Php8DesignPatterns\Creational\AbstractFactory;

class ConcreteHouseFactory implements HouseFactoryInterface
{
    public function createHouse(): HouseInterface
    {
        return new ConcreteHouse();
    }
}
