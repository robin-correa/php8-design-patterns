<?php

require_once 'vendor/autoload.php';

use RobinCorrea\Php8DesignPatterns\Behavioral\Strategy\HtmlFormatter;
use RobinCorrea\Php8DesignPatterns\Behavioral\Strategy\JsonFormatter;
use RobinCorrea\Php8DesignPatterns\Behavioral\Strategy\PlainTextFormatter;
use RobinCorrea\Php8DesignPatterns\Behavioral\Strategy\TextEditor;

$text = 'Hello, World!';

$editor = new TextEditor(new PlainTextFormatter());
echo $editor->show($text)."\n";

$editor->setFormatter(new HtmlFormatter());
echo $editor->show($text)."\n";

$editor->setFormatter(new JsonFormatter());
echo $editor->show($text)."\n";
