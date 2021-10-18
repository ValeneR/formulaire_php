<?php
require_once 'Bicycle.php';
$bike = new Bicycle('blue');
$bike->setCurrentSpeed(0);
var_dump($bike);

echo $bike->forward();
echo '<br> Vitesse du vélo: ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo: ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();

$rockrider = new Bicycle('yellow');
var_dump($rockrider);

$tornado = new Bicycle('black');
var_dump($tornado);

require_once 'Cars.php';
$car = new Car('red', 4, 'diesel');
$car->setCurrentSpeed(0);
var_dump($car);
