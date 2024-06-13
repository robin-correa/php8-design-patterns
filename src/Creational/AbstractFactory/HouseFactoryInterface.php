<?php

namespace RobinCorrea\Php8DesignPatterns\Creational\AbstractFactory;

interface HouseFactoryInterface
{
    public function createHouse(): HouseInterface;
}
