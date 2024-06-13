<?php

namespace RobinCorrea\Php8DesignPatterns\Creational\Factory;

use Exception;

class PaymentFactory
{
    public function createPaymentMethod(string $type): PaymentMethodInterface
    {
        switch ($type) {
            case 'creditcard':
                return new CreditCardPayment();
            case 'paypal':
                return new PaypalPayment();
            default:
                throw new Exception('Payment method not supported.');
        }
    }
}
