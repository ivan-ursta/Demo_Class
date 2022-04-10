<?php
class Animal
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

}

$r=new Rabbit('rabbit','jump','Robby');
$r->Show();
