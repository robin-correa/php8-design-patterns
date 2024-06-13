<?php

namespace RobinCorrea\Php8DesignPatterns\Creational\Factory;

interface PaymentMethodInterface
{
    public function pay(float $amount): string;
}
