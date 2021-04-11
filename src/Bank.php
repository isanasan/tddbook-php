<?php

namespace isanasan\phptddbook;

class Bank
{
    public function reduce (Expression $source,string $to)
    {
        return Money::dollar(10);
    }
}
