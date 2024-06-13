<?php

require_once 'vendor/autoload.php';

use RobinCorrea\Php8DesignPatterns\Creational\AbstractFactory\ConcreteHouseFactory;
use RobinCorrea\Php8DesignPatterns\Creational\AbstractFactory\HouseFactoryInterface;
use RobinCorrea\Php8DesignPatterns\Creational\AbstractFactory\WoodenHouseFactory;

function buildHouse(HouseFactoryInterface $factory)
{
    $house = $factory->createHouse();
    echo $house->getDescription()."\n";
    echo $house->createWalls()."\n";
    echo $house->createDoors()."\n";
    echo $house->createWindows()."\n";
}

// Build a Wooden House
echo "Building a Wooden House:\n";
$woodenHouseFactory = new WoodenHouseFactory();
buildHouse($woodenHouseFactory);

// Build a Concrete House
echo "\nBuilding a Concrete House:\n";
$concreteHouseFactory = new ConcreteHouseFactory();
buildHouse($concreteHouseFactory);
