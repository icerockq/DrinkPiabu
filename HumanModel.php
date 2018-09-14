<?php

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

/**
 * Class Drink
 */
class Drink
{
    /**
     * @var string
     */
    protected $type;

    /**
     * @param string $type
     *
     * @return Drink
     */
    public function setType(string $type): Drink
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
}

$human = new Human();
$drink = new Drink();

$drink->setType('Сок');
$human->haveDrink($drink);
