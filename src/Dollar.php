<?php

namespace isanasan\phptddbook;

class Dollar extends Money
{
    private $currency;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
        $this->currency = 'USD';
    }

    public function currency(): string
    {
        return $this->currency;
    }

    public function times(int $multiplier):Money
    {
        return (new Dollar($this->amount * $multiplier));
    }
}
