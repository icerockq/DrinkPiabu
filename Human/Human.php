<?php

class Human
{
    /**
     * @var Drink[]
     */
    private $drinks = [];

    public function drink(): void
    {
        foreach ($this->drinks as $drink) {
            echo "Вы выпили {$drink->getName()}\n";
        }
    }

    public function addDrink(Drink $drink): void
    {
        $this->drinks[] = $drink;
    }
}
