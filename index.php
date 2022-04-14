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
        $animal->createAnimal($animal);
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
class Aquatic extends Animal
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
class Birds extends Animal
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
//Product interface
interface AnimalConnector
{
    public function createAnimal($animal): void;
}
//Concrete Product
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
    }
}
//Concrete Product
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
    }
}

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
    }
}


$r=new Rabbit('rabbit','jump','Robby');
$r->Show();
$r->Color();
