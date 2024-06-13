<?php

namespace RobinCorrea\Php8DesignPatterns\Behavioral\Observer;

use SplObserver;
use SplSubject;

class FraudDetectionObserver implements SplObserver
{
    public function update(SplSubject $subject): void
    {
        $details = $subject->getPaymentDetails();
        echo 'Fraud Detection: Checking payment of '.$details['amount']." for fraud.\n";
    }
}
