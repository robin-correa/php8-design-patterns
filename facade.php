<?php

require_once 'vendor/autoload.php';

use RobinCorrea\Php8DesignPatterns\Structural\Facade\InventoryService;
use RobinCorrea\Php8DesignPatterns\Structural\Facade\LoggingService;
use RobinCorrea\Php8DesignPatterns\Structural\Facade\NotificationService;
use RobinCorrea\Php8DesignPatterns\Structural\Facade\OrderFacade;
use RobinCorrea\Php8DesignPatterns\Structural\Facade\PaymentService;
use RobinCorrea\Php8DesignPatterns\Structural\Facade\ShippingService;

$inventoryService = new InventoryService();
$paymentService = new PaymentService();
$shippingService = new ShippingService();
$notificationService = new NotificationService();
$loggingService = new LoggingService();

$orderFacade = new OrderFacade(
    $inventoryService,
    $paymentService,
    $shippingService,
    $notificationService,
    $loggingService
);

echo $orderFacade->processOrder('Laptop', 1500.0);
