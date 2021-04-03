<?php

namespace isanasan\phptddbook;

class Dollar
{
    private $amount;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function times(int $multiplier)
    {
        return (new Dollar($this->amount * $multiplier));
    }

    public function equals(Dollar $object) {
        return $this->amount === $object->amount;
    }
}
