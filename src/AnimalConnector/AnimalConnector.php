<?php
namespace App\AnimalConnector;
//Product interface

interface AnimalConnector
{
    public function createAnimal($animal): void;
}