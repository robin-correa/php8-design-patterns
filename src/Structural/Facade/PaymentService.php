<?php

namespace RobinCorrea\Php8DesignPatterns\Structural\Facade;

class PaymentService
{
    public function processPayment(float $amount): string
    {
        return 'Payment processed: $'.$amount."\n";
    }
}
