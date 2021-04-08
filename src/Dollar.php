<?php

namespace isanasan\phptddbook;

class Dollar extends Money
{
    public function times(int $multiplier):Money
    {
        return Money::dollar($this->amount * $multiplier);
    }
}
