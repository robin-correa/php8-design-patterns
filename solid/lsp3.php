<?php

namespace RobinCorrea\Php8DesignPatterns\SOLID\LSP;

// Abstract class representing a general animal
abstract class Animal
{
    abstract public function eat(): void;
}

// Implementation of Monkey class
class Monkey extends Animal
{
    public function eat(): void
    {
        echo "The monkey is eating.\n";
    }
}

// Implementation of Lion class
class Lion extends Animal
{
    public function eat(): void
    {
        echo "The lion is eating.\n";
    }
}

// Consumer class that uses the Animal class
class ZooKeeper
{
    public function feedAnimal(Animal $animal): void
    {
        $animal->eat();
    }
}

// Usage example
$monkey = new Monkey();
$lion = new Lion();
$zooKeeper = new ZooKeeper();

echo "Feeding the monkey:\n";
$zooKeeper->feedAnimal($monkey);

echo "\nFeeding the lion:\n";
$zooKeeper->feedAnimal($lion);
