<?php

namespace App\Model;

use App\Model\Drink\Drink;

final class Person
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var Drink[]
     */
    private $drinks = [];

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param Drink $drink
     */
    public function addDrink(Drink $drink): void
    {
        $this->drinks[] = $drink;
    }

    /**
     * @return Drink[]
     */
    public function getDrinks(): array
    {
        return $this->drinks;
    }

    /**
     * @return bool
     */
    public function isNoDrinks(): bool
    {
        return [] === $this->drinks;
    }
}
