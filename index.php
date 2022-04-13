<?php

require 'vendor/autoload.php';

use ktamas77\phptimer\Timer;

$timer = new Timer();
$a=1;
$timer->start('cycle');
    for ($i = 0; $i < 100000; $i++) {
    $a *= $i;
}
$timer->stop('cycle');

for ($i = 0; $i < 10; $i++) {
    $timer->start("subloop");
    for ($j = 0; $j < 1000000; $j++) {
        $a = $i * $j;
    }
    $timer->stop("subloop");
}  

var_dump($timer->getAll());
