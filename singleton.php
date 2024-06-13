<?php

require_once 'vendor/autoload.php';

use RobinCorrea\Php8DesignPatterns\Creational\Singleton\PaymentGateway;

// Get the PaymentGateway instance
$paymentGateway = PaymentGateway::getInstance();
echo $paymentGateway->processPayment(100.0, 'USD', 'creditcard')."\n";

// Get the configuration to verify the same instance is used
$config = $paymentGateway->getConfig();
print_r($config);

// Verify that the same instance is returned
$anotherPaymentGateway = PaymentGateway::getInstance();
echo ($paymentGateway === $anotherPaymentGateway) ? "Same instance\n" : "Different instance\n";
