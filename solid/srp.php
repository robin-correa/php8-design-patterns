<?php
/*
The Single Responsibility Principle states that a class should have only one reason to change, meaning it should have only one job or responsibility.

    User: This class handles user data and has properties name and email. Its responsibility is to encapsulate user-related data.
    UserRepository: This class handles the persistence of user data, such as saving a user to a database. Its responsibility is to manage the lifecycle of user data storage.
    EmailService: This class handles sending emails to users. Its responsibility is to manage email communication with users.

    Usage Example: Demonstrates creating a user, saving the user to a repository, and sending a welcome email using separate classes.
*/

namespace RobinCorrea\Php8DesignPatterns\SOLID\SRP;

// Class for handling user data
class User
{
    private $name;

    private $email;

    public function __construct(string $name, string $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }
}

// Class for handling user persistence (e.g., saving to a database)
class UserRepository
{
    public function save(User $user): void
    {
        // Code to save user to a database
        echo 'Saving user: '.$user->getName()."\n";
    }
}

// Class for sending emails
class EmailService
{
    public function sendWelcomeEmail(User $user): void
    {
        // Code to send email
        echo 'Sending welcome email to: '.$user->getEmail()."\n";
    }
}

// Usage example
$user = new User('Robin Correa', 'robin.correa21@gmail.com');

$userRepository = new UserRepository();
$userRepository->save($user);

$emailService = new EmailService();
$emailService->sendWelcomeEmail($user);
