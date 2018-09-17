<?php

use Pikabu\Day256\Drink;
use Pikabu\Day256\Human;

require __DIR__ . '/vendor/autoload.php';

$human = new Human();
$drink = new Drink();

$drink->setType('Сок');
$human->haveDrink($drink);
