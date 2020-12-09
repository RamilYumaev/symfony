<?php


namespace App\Twig;


use App\GreetingGenerator;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class GreetExtension extends AbstractExtension
{
    private $greetingGenerator;

    /**
     * GreenExtension constructor.
     * @param GreetingGenerator $greetingGenerator
     */
    public function __construct(GreetingGenerator $greetingGenerator)
    {
        $this->greetingGenerator = $greetingGenerator;
    }

    /**
     * @return array|\Twig\TwigFilter[]
     */
    public function getFilters()
    {
        return [new TwigFilter('greet', [$this,'greetUser'])];
    }

    /**
     * @param $name
     * @return string
     */
    public function greetUser($name){
        $greeting = $this->greetingGenerator->getRandomGreeting();
        return "$greeting $name!";
    }

}