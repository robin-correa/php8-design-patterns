<?php

require_once 'vendor/autoload.php';

use RobinCorrea\Php8DesignPatterns\Structural\Decorator\EmailNotifier;
use RobinCorrea\Php8DesignPatterns\Structural\Decorator\SlackNotifier;
use RobinCorrea\Php8DesignPatterns\Structural\Decorator\SMSNotifier;

$message = 'Hello, World!';

// Basic notifier
$notifier = new EmailNotifier();
$notifier->send($message);

// Decorated with SMS notifier
$smsNotifier = new SMSNotifier($notifier);
$smsNotifier->send($message);

// Further decorated with Slack notifier
$slackNotifier = new SlackNotifier($smsNotifier);
$slackNotifier->send($message);
