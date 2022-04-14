<?php

//The Creator declares a factory method
abstract class Animal
{
    //Factory method
    abstract public function getAnimal(): AnimalConnector;

    public function Show($animal):void
    {
        //Call the factory method to create a Product object...
        $animal = $this->getAnimal();
        $animal->showAnimal();
    }
}
//Concrete Creator
class Terrestrial extends Animal
{
    private $name;

    public function __construct($n)
    {
        $this->name=$n;
    }
    public function getAnimal(): AnimalConnector
    {
        return new TerrestrialConnector($this->name);
    }
}

//Concrete Creator
class Aquatic
{
    private $name;

    public function __construct($n)
    {
        $this->name=$n;
    }
    public function getAnimal(): AnimalConnector
    {
        return new AquaticConnector($this->name);
    }
}

//Concrete Creator
class Birds
{
    private $name;

    public function __construct($n)
    {
        $this->name=$n;
    }
    public function getAnimal(): AnimalConnector
    {
        return new BirdsConnector($this->name);
    }
}

$r=new Rabbit('rabbit','jump','Robby');
$r->Show();
$r->Color();
