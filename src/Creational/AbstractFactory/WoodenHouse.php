<?php

namespace RobinCorrea\Php8DesignPatterns\Creational\AbstractFactory;

class WoodenHouse implements HouseInterface
{
    public function getDescription(): string
    {
        return 'This is a wooden house.';
    }

    public function createWalls(): string
    {
        return 'Building wooden walls.';
    }

    public function createDoors(): string
    {
        return 'Installing wooden doors.';
    }

    public function createWindows(): string
    {
        return 'Installing wooden windows.';
    }
}
