<?php

use App\Model\Person;
use App\Model\Drink\Juice;
use App\Model\Drink\Beer;
use App\Service\Party;

require_once 'vendor/autoload.php';

$carrotJuice = new Juice('Морковный сок');
$appleJuice = new Juice('Яблочный сок');
$orangeJuice = new Juice('Апельсиновый сок');

$darkBeer = new Beer('Темное пиво');
$lightBeer = new Beer('Светлое пиво');
$unfilteredBeer = new Beer('Нефильтрованное пиво');

$bob = new Person('Bob');
$bob->addDrink($appleJuice);
$bob->addDrink($orangeJuice);

$nick = new Person('Nick');
$nick->addDrink($lightBeer);

$boris = new Person('Boris');
$boris->addDrink($unfilteredBeer);
$boris->addDrink($darkBeer);

try {
    $party = new Party();
    $party->addGuest($bob);
    $party->addGuest($nick);
    $party->addGuest($boris);

    $party->drink();
} catch (\Exception $e) {
    echo "Упс. Что-то пошло не так: {$e->getMessage()}";
}
