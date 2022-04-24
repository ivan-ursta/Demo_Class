<?php
namespace App\Aquatic;

use App\Animal\Animal;
use App\AnimalConnector\AnimalConnector;
use App\AquaticConnector\AquaticConnector;

class Aquatic extends Animal
{
    private $name;

    public function __construct($n)
    {
        $this->name = $n;
    }

    public function getAnimal(): AnimalConnector
    {
        return new AquaticConnector($this->name);
    }
}