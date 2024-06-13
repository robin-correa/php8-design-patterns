<?php

namespace RobinCorrea\Php8DesignPatterns\Behavioral\Observer;

use SplObserver;
use SplSubject;

class NotificationObserver implements SplObserver
{
    public function update(SplSubject $subject): void
    {
        $details = $subject->getPaymentDetails();
        echo 'Notification: Sending notification for payment of '.$details['amount']."\n";
    }
}
