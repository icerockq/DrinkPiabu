<?php

namespace App\Service;

use App\Model\Person;

class Party
{
    /**
     * @var Person[]
     */
    private $guests = [];

    /**
     * @throws \RuntimeException
     */
    public function drink(): void
    {
        if ([] === $this->guests) {
            throw new \RuntimeException('Никто не пришел на вечеринку.\n', 404);
        }

        foreach ($this->guests as $guest) {
            if (true === $guest->isNoDrinks()) {
                echo "{$guest->getName()} пришел без напитков.\n";
            } else {
                $drinks = $guest->getDrinks();
                $drink = $drinks[array_rand($drinks)];

                echo sprintf(
                    "%s пьет %s.\n",
                    $guest->getName(),
                    $drink->getName()
                );
            }
        }
    }

    /**
     * @param Person $person
     */
    public function addGuest(Person $person): void
    {
        $this->guests[] = $person;
    }
}
