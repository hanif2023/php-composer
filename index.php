<?php

require_once __DIR__ . '/vendor/autoload.php';

use Hanif\Data\People;

$people = new People("Hanif");

echo $people->sayHello("Budi") . PHP_EOL;
