<?php

/*
Open/Closed Principle 2 (OCP)
    Focus: Consumable Classes (classes that provide functionality)
    Purpose: Ensures that classes can be extended without modifying existing code.
    Example: You can add new types of reports (PdfReport, ExcelReport) without changing the ReportGenerator class. The ReportGenerator can work with any class that implements the ReportInterface.
*/

namespace RobinCorrea\Php8DesignPatterns\SOLID\OCP;

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

// Adding a new delivery method without changing DeliveryService
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
$deliveryService = new DeliveryService();
$standardDelivery = new StandardDelivery();
$expressDelivery = new ExpressDelivery();

$deliveryService->deliverPackage($standardDelivery, 'Package A');
$deliveryService->deliverPackage($expressDelivery, 'Package B');
