<?php

namespace RobinCorrea\Php8DesignPatterns\Structural\Facade;

class OrderFacade
{
    private $inventoryService;

    private $paymentService;

    private $shippingService;

    private $notificationService;

    private $loggingService;

    public function __construct(
        InventoryService $inventoryService,
        PaymentService $paymentService,
        ShippingService $shippingService,
        NotificationService $notificationService,
        LoggingService $loggingService
    ) {
        $this->inventoryService = $inventoryService;
        $this->paymentService = $paymentService;
        $this->shippingService = $shippingService;
        $this->notificationService = $notificationService;
        $this->loggingService = $loggingService;
    }

    public function processOrder(string $product, float $amount): string
    {
        $result = "Order processing initiated:\n";
        $result .= $this->inventoryService->checkStock($product);
        $result .= $this->paymentService->processPayment($amount);
        $result .= $this->shippingService->shipProduct($product);
        $result .= $this->notificationService->notifyCustomer($product);
        $result .= $this->loggingService->logOrder($product, $amount);

        return $result;
    }
}
