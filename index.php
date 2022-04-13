<?php

require 'vendor/autoload.php';

use ktamas77\phptimer\Timer;

$timer = new Timer();

$timer->start('cycle');
function exc()
{
    for ($i = 0; $i < 10; $i++) {
        if($i>=5){
            throw new Exception('var i >= 5!');
        }
        echo $i . ' ';
    }
}

try {
    exc();
} catch (Exception $e) {
    echo 'Caught exception:' . $e->getMessage();
}
$timer->stop('cycle');

var_dump($timer->getAll());
