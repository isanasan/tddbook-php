<?php

namespace isanasan\phptddbook;

class Franc
{
    private $amount;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function times(int $multiplier)
    {
        return (new Franc($this->amount * $multiplier));
    }

    public function equals(Franc $object) {
        return $this->amount === $object->amount;
    }
}
