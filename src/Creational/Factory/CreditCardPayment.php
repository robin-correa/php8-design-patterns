<?php

namespace RobinCorrea\Php8DesignPatterns\Creational\Factory;

class CreditCardPayment implements PaymentMethodInterface
{
    public function pay(float $amount): string
    {
        return "Paid $" . $amount . " using Credit Card.";
    }
}
