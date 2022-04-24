<?php
namespace App\Animal;

use App\AnimalConnector\AnimalConnector;

//The Creator declares a factory method
abstract class Animal
{
    //Factory method
    abstract public function getAnimal(): AnimalConnector;

    public function showAnimal($animal):void
    {
        //Call the factory method to create a Product object...
        $animal = $this->getAnimal();
        $animal->createAnimal($animal);
    }
}