<?php

/*
    Interface Segregation

    Borrowable, Returnable, Reservable: Smaller, specific interfaces representing different capabilities in the library system.
    RegularMember: Implements Borrowable and Returnable interfaces, providing functionalities to borrow and return books.
    StaffMember: Implements Borrowable, Returnable, and Reservable interfaces, providing additional functionality to reserve books.
    Usage Example: Demonstrates how the RegularMember and StaffMember use the specific interfaces according to their roles and capabilities.

    By following ISP, we ensure that classes only implement methods they need, making the system more modular and easier to maintain.
*/

namespace RobinCorrea\Php8DesignPatterns\SOLID\ISP;

// Define separate interfaces for different user capabilities

interface Borrowable
{
    public function borrowBook(string $bookTitle): void;
}

interface Returnable
{
    public function returnBook(string $bookTitle): void;
}

interface Reservable
{
    public function reserveBook(string $bookTitle): void;
}

// Concrete class for a regular library member implementing Borrowable and Returnable
class RegularMember implements Borrowable, Returnable
{
    public function borrowBook(string $bookTitle): void
    {
        echo "Borrowing book: $bookTitle\n";
    }

    public function returnBook(string $bookTitle): void
    {
        echo "Returning book: $bookTitle\n";
    }
}

// Concrete class for a library staff member implementing all capabilities
class StaffMember implements Borrowable, Reservable, Returnable
{
    public function borrowBook(string $bookTitle): void
    {
        echo "Borrowing book: $bookTitle\n";
    }

    public function returnBook(string $bookTitle): void
    {
        echo "Returning book: $bookTitle\n";
    }

    public function reserveBook(string $bookTitle): void
    {
        echo "Reserving book: $bookTitle\n";
    }
}

// Usage example
$regularMember = new RegularMember();
$staffMember = new StaffMember();

echo "Regular Member Actions:\n";
$regularMember->borrowBook('Laravel Beyond CRUD');
$regularMember->returnBook('Laravel Beyond CRUD');

echo "\nStaff Member Actions:\n";
$staffMember->borrowBook('English');
$staffMember->returnBook('English');
$staffMember->reserveBook('Atomic habits');
