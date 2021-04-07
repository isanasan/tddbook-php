<?php

namespace isanasan\phptddbook;

class Franc extends Money
{
    private $currency;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
        $this->currency = 'CHF';
    }

    public function currency(): string
    {
        return $this->currency;
    }

    public function times(int $multiplier):Money
    {
        return (new Franc($this->amount * $multiplier));
    }
}
