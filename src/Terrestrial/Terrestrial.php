<?php
namespace App\Terrestrial;

use App\Animal\Animal;
use App\AnimalConnector\AnimalConnector;
use App\TerrestrialConnector\TerrestrialConnector;

class Terrestrial extends Animal
{
    private $name;

    public function __construct($n)
    {
        $this->name = $n;
    }

    public function getAnimal(): AnimalConnector
    {
        return new TerrestrialConnector($this->name);
    }
}