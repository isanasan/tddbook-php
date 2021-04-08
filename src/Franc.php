<?php

namespace isanasan\phptddbook;

class Franc extends Money
{
    public function times(int $multiplier): Money
    {
        return new Franc($this->amount * $multiplier,$this->currency);
    }
}
