<?php

/*
    Dependency Injection

    The Dependency Inversion Principle means that high-level code should not depend on low-level code.
    Both should depend on abstractions (interfaces or abstract classes).
    Additionally, abstractions should not depend on details; details should depend on abstractions.
    This keeps your code flexible and easy to change.

    Explanation with Highlighted Keywords
        Printable: An interface representing the abstraction for content that can be printed.
        Book and Article: Concrete classes implementing the Printable interface, providing specific content to print (low-level modules).
        Printer: A high-level class that depends on the Printable interface. It uses dependency injection to receive the specific content to print.
        Usage Example: Demonstrates creating instances of Book and Article and using the Printer to print their content.

    Benefits of DIP
        Decoupling: The Printer class (high-level module) is not dependent on the specific implementations (Book or Article) (low-level modules) but on the Printable interface (abstraction).
        Flexibility: Allows for easy substitution of different Printable implementations without changing the Printer class.
        Maintainability: Promotes a more modular and maintainable design.

*/

namespace RobinCorrea\Php8DesignPatterns\SOLID\DIP;

// Define an interface for printable content (abstraction)
interface Printable
{
    public function getContent(): string;
}

// Concrete class for book content (low-level module)
class Book implements Printable
{
    public function getContent(): string
    {
        return 'This is the book content';
    }
}

// Concrete class for article content (low-level module)
class Article implements Printable
{
    public function getContent(): string
    {
        return 'This is the article content';
    }
}

// High-level class that depends on the Printable interface (high-level module)
class Printer
{
    private $printable; // depends on abstraction

    public function __construct(Printable $printable) // dependency injection
    {
        $this->printable = $printable;
    }

    public function printContent(): void
    {
        $content = $this->printable->getContent(); // depends on abstraction
        echo 'Printing content: '.$content."\n";
    }
}

// Usage example
$book = new Book();
$article = new Article();

$printer = new Printer($book); // high-level depends on low-level through abstraction

echo "Printing a Book:\n";
$printer->printContent();

$printer = new Printer($article); // high-level depends on low-level through abstraction

echo "\nPrinting an Article:\n";
$printer->printContent();
