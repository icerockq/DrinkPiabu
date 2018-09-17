<?php

namespace Pikabu\Day256;

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
