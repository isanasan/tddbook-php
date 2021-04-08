<?php

namespace isanasan\phptddbook;

class Franc extends Money
{
    public function times(int $multiplier): Money
    {
        return Money::franc($this->amount * $multiplier);
    }
}
