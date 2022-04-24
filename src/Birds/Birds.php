<?php
namespace App\Birds;

use App\Animal\Animal;
use App\AnimalConnector\AnimalConnector;
use App\BirdsConnector\BirdsConnector;

class Birds extends Animal
{
    private $name;

    public function __construct($n)
    {
        $this->name = $n;
    }

    public function getAnimal(): AnimalConnector
    {
        return new BirdsConnector($this->name);
    }
}