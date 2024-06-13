<?php

namespace RobinCorrea\Php8DesignPatterns\Creational\AbstractFactory;

class ConcreteHouse implements HouseInterface
{
    public function getDescription(): string
    {
        return 'This is a concrete house.';
    }

    public function createWalls(): string
    {
        return 'Building concrete walls.';
    }

    public function createDoors(): string
    {
        return 'Installing concrete doors.';
    }

    public function createWindows(): string
    {
        return 'Installing concrete windows.';
    }
}
