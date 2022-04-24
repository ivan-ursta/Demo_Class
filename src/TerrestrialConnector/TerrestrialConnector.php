<?php
namespace App\TerrestrialConnector;

use App\AnimalConnector\AnimalConnector;

class TerrestrialConnector implements AnimalConnector
{
    private $name;

    public function __construct(string $n)
    {
        $this->name = $n;
    }

    public function createAnimal($animal): void
    {
        echo "Send request to create Terrestrial animal.\n";
        echo "Hello, my name is " . $this->name;
    }
}