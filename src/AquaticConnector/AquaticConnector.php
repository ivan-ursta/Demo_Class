<?php
namespace App\AquaticConnector;

use App\AnimalConnector\AnimalConnector;

class AquaticConnector implements AnimalConnector
{
    private $name;

    public function __construct(string $n)
    {
        $this->name = $n;
    }

    public function createAnimal($animal): void
    {
        echo "Send request to create Aquatic animal.\n";
        echo "Hello, my name is " . $this->name;
    }
}