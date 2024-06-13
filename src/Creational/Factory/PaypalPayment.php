<?php

namespace RobinCorrea\Php8DesignPatterns\Creational\Factory;

class PaypalPayment implements PaymentMethodInterface
{
    public function pay(float $amount): string
    {
        return "Paid $" . $amount . " using PayPal.";
    }
}
