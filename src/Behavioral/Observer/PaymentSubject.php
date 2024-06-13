<?php

namespace RobinCorrea\Php8DesignPatterns\Behavioral\Observer;

use SplObjectStorage;
use SplObserver;
use SplSubject;

class PaymentSubject implements SplSubject
{
    private $observers;

    private $paymentDetails;

    public function __construct()
    {
        $this->observers = new SplObjectStorage();
    }

    public function attach(SplObserver $observer): void
    {
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer): void
    {
        $this->observers->detach($observer);
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function setPaymentDetails($details): void
    {
        $this->paymentDetails = $details;
        $this->notify();
    }

    public function getPaymentDetails()
    {
        return $this->paymentDetails;
    }
}
