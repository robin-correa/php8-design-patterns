<?php

namespace RobinCorrea\Php8DesignPatterns\Creational\AbstractFactory;

interface HouseInterface
{
    public function getDescription(): string;

    public function createWalls(): string;

    public function createDoors(): string;

    public function createWindows(): string;
}
