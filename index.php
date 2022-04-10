<?php
class Animal
{
    public $type;
    public $move;

    function __construct($t,$m)
    {
        $this->type=$t;
        $this->move=$m;
    }

    function Show()
    {
        echo $this->type .' is '. $this->move .PHP_EOL;
    }
}
$r=new Animal('rabbit','jump');
$r->Show();

$l=new Animal('lion','run');
$l->Show();