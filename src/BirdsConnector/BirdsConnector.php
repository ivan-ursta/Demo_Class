<?php
namespace App\BirdsConnector;

use App\AnimalConnector\AnimalConnector;

class BirdsConnector implements AnimalConnector
{
    private $name;

    public function __construct(string $n)
    {
        $this->name = $n;
    }

    public function createAnimal($animal): void
    {
        echo "Send request to create Birds animal.\n";
        echo "Hello, my name is " . $this->name;
    }
}