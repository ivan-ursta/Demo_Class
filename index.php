<?php


use App\Animal\Animal;
use App\Terrestrial\Terrestrial;
use App\Aquatic\Aquatic;
use App\Birds\Birds;


require_once __DIR__ . '/vendor/autoload.php';

function clientCode(Animal $creator)
{
    $creator->showAnimal("Hello world!");
}

echo "Testing ConcreteCreator1:\n";
clientCode(new Terrestrial("Bear"));
echo "\n\n";

echo "Testing ConcreteCreator2:\n";
clientCode(new Aquatic("Dolphin"));
echo "\n\n";

echo "Testing ConcreteCreator3:\n";
clientCode(new Birds("Eagle"));
echo "\n\n";