<?php

require_once 'vendor/autoload.php';

use RobinCorrea\Php8DesignPatterns\Behavioral\Observer\FraudDetectionObserver;
use RobinCorrea\Php8DesignPatterns\Behavioral\Observer\LoggingObserver;
use RobinCorrea\Php8DesignPatterns\Behavioral\Observer\NotificationObserver;
use RobinCorrea\Php8DesignPatterns\Behavioral\Observer\PaymentSubject;

$paymentSubject = new PaymentSubject();

$loggingObserver = new LoggingObserver();
$notificationObserver = new NotificationObserver();
$fraudDetectionObserver = new FraudDetectionObserver();

$paymentSubject->attach($loggingObserver);
$paymentSubject->attach($notificationObserver);
$paymentSubject->attach($fraudDetectionObserver);

$paymentDetails = ['amount' => 1500.0, 'currency' => 'USD', 'method' => 'creditcard'];
$paymentSubject->setPaymentDetails($paymentDetails);

// Detach an observer and make another payment
$paymentSubject->detach($loggingObserver);

$paymentDetails = ['amount' => 2000.0, 'currency' => 'USD', 'method' => 'paypal'];
$paymentSubject->setPaymentDetails($paymentDetails);
