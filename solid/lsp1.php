<?php

/*
Liskov Substitution Principle 1 (LSP)

    Focus: Consumer Classes (classes that use or depend on other classes)
    Purpose: Ensures that subclasses can be used interchangeably with their parent class without affecting the functionality.
    Example: A function that uses a base class type (like ReportInterface) should work with any subclass (PdfReport, ExcelReport) without any issues or need for modification.

    The essence of the Liskov Substitution Principle (LSP) is that objects of a superclass should be replaceable with objects of a subclass without affecting the functionality of the program.

    DeliveryMethodInterface: This interface acts as the "superclass" in our example. It defines a contract that all delivery methods must follow.
    StandardDelivery, ExpressDelivery, DroneDelivery: These are the "subclasses" that implement the DeliveryMethodInterface. They provide specific implementations of the deliver method.
    DeliveryService: This is the consumer class that depends on the DeliveryMethodInterface and uses the deliver method. It should work correctly with any implementation of DeliveryMethodInterface.

    LSP in Action
    The DeliveryService class calls the deliver method on an object that implements the DeliveryMethodInterface.
    The actual object passed to deliverPackage can be an instance of StandardDelivery, ExpressDelivery, or DroneDelivery.
    The program's functionality remains correct regardless of which subclass object is used, demonstrating that the subclasses can replace the superclass without affecting the program's behavior.
    This setup adheres to the Liskov Substitution Principle by ensuring that the DeliveryService can use any DeliveryMethodInterface implementation interchangeably, maintaining the integrity and correctness of the application.
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

// Implementation of drone delivery method (subclass)
class DroneDelivery implements DeliveryMethodInterface
{
    public function deliver(string $package): string
    {
        return 'Delivering package: '.$package.' using Drone Delivery.';
    }
}

// Consumer class that uses the DeliveryMethodInterface
class DeliveryService
{
    private $deliveryMethod;

    public function __construct(DeliveryMethodInterface $deliveryMethod)
    {
        $this->deliveryMethod = $deliveryMethod;
    }

    public function deliverPackage(string $package): void
    {
        echo $this->deliveryMethod->deliver($package)."\n";
    }
}

// Usage example
$standardDelivery = new StandardDelivery(); // subclass object
$expressDelivery = new ExpressDelivery(); // subclass object
$droneDelivery = new DroneDelivery(); // subclass object

$deliveryService1 = new DeliveryService($standardDelivery);
echo "Processing Standard Delivery:\n";
$deliveryService1->deliverPackage('Package A');

$deliveryService2 = new DeliveryService($expressDelivery);
echo "\nProcessing Express Delivery:\n";
$deliveryService2->deliverPackage('Package B');

$deliveryService3 = new DeliveryService($droneDelivery);
echo "\nProcessing Drone Delivery:\n";
$deliveryService3->deliverPackage('Package C');
