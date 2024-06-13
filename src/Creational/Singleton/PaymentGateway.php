<?php

namespace RobinCorrea\Php8DesignPatterns\Creational\Singleton;

class PaymentGateway
{
    private static $instance;

    private $config;

    // Private constructor to prevent instantiation
    private function __construct()
    {
        // Load payment gateway configuration
        $this->config = [
            'api_key' => 'your_api_key_here',
            'api_secret' => 'your_api_secret_here',
            'base_url' => 'https://api.paymentgateway.com',
        ];
    }

    // Static method to get the instance of the PaymentGateway
    public static function getInstance(): PaymentGateway
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function getConfig(): array
    {
        return $this->config;
    }

    public function processPayment(float $amount, string $currency, string $source): string
    {
        // Simulate payment processing
        return "Processed payment of $amount $currency using source $source.";
    }

    // Prevent cloning of the instance
    private function __clone()
    {
    }

    // Prevent unserializing of the instance
    public function __wakeup()
    {
    }
}
