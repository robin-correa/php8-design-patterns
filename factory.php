<?php

require 'vendor/autoload.php';

use RobinCorrea\Php8DesignPatterns\Creational\Factory\PaymentFactory;

$factory = new PaymentFactory();

$creditCardPayment = $factory->createPaymentMethod('creditcard');
echo $creditCardPayment->pay(100.0) . "\n";

$paypalPayment = $factory->createPaymentMethod('paypal');
echo $paypalPayment->pay(200.0) . "\n";
