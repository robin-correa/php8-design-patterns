<?php

/*
Liskov Substitution Principle 2 (LSP)

    Focus: Consumer Classes (classes that use or depend on other classes)
    Purpose: Ensures that subclasses can be used interchangeably with their parent class without affecting the functionality.
    Example: A function that uses a base class type (like ReportInterface) should work with any subclass (PdfReport, ExcelReport) without any issues or need for modification.

    The essence of the Liskov Substitution Principle (LSP) is that objects of a superclass should be replaceable with objects of a subclass without affecting the functionality of the program.
*/

namespace RobinCorrea\Php8DesignPatterns\SOLID\LSP;

// Interface representing a general delivery method (superclass)
interface DeliveryMethodInterface
{
    public function deliver(string $package): string;
}

// Implementation of standard delivery method (subclass)
class StandardDelivery implements DeliveryMethodInterface
{
    public function deliver(string $package): string
    {
        return 'Delivering package: '.$package.' using Standard Delivery.';
    }
}

// Implementation of express delivery method (subclass)
class ExpressDelivery implements DeliveryMethodInterface
{
    public function deliver(string $package): string
    {
        return 'Delivering package: '.$package.' using Express Delivery.';
    }
}

// Consumer class that uses the DeliveryMethodInterface
class DeliveryService
{
    public function deliverPackage(DeliveryMethodInterface $deliveryMethod, string $package): void
    {
        echo $deliveryMethod->deliver($package)."\n";
    }
}

// Usage example
$standardDelivery = new StandardDelivery();
$deliveryService1 = new DeliveryService($standardDelivery);
$deliveryService1->deliverPackage($standardDelivery, 'Package 1');

$expressDelivery = new ExpressDelivery();
$deliveryService2 = new DeliveryService($expressDelivery);
$deliveryService2->deliverPackage($standardDelivery, 'Package 2');
