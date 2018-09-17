<?php

namespace Pikabu\Day256;

/**
 * Class Human
 */
class Human
{
    /**
     * @param Drink $drink
     */
    public function haveDrink(Drink $drink): void
    {
        if ($typeDrink = $drink->getType()) {
            echo 'Вы выпили ' . $typeDrink;
        } else {
            echo 'Для начала необходимо выбрать, что вы будете пить';
        }
    }
}
