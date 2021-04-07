<?php

namespace isanasan\phptddbook;

class Franc extends Money
{
    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function currency(): string
    {
        return 'CHF';
    }

    public function times(int $multiplier):Money
    {
        return (new Franc($this->amount * $multiplier));
    }
}
