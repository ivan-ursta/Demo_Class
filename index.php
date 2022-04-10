<?php
abstract class Animal
{
    protected $type;
    protected $move;

    function __construct($t,$m)
    {
        $this->type=$t;
        $this->move=$m;
    }

    function Show()
    {
        echo $this->type .' is '. $this->move;
    }
    abstract function Color();
}

class Rabbit extends Animal
{
    protected $name;

    function __construct($t, $m, $n)
    {
        parent::__construct($t, $m);
        $this->name=$n;
    }
    function Show()
    {
        parent::Show();
        echo ' his name is ' .$this->name .PHP_EOL;
    }
    function Color()
    {
        echo 'his color is white' .PHP_EOL;
    }
}

$r=new Rabbit('rabbit','jump','Robby');
$r->Show();
$r->Color();
