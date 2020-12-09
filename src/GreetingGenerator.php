<?php


namespace App;


use Psr\Log\LoggerInterface;

class GreetingGenerator
{
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function getRandomGreeting()
    {
        $greetings = ['Hey', 'Yo', 'Aloha', 'Привет'];
        $greeting = $greetings[array_rand($greetings)];

        $this->logger->info('Получено случайное приветствие: '.$greeting);
        return $greeting;
    }

}