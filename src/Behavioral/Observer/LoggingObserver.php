<?php

namespace RobinCorrea\Php8DesignPatterns\Behavioral\Observer;

use SplObserver;
use SplSubject;

class LoggingObserver implements SplObserver
{
    public function update(SplSubject $subject): void
    {
        $details = $subject->getPaymentDetails();
        echo 'Logging: Payment processed for amount '.$details['amount']."\n";
    }
}
