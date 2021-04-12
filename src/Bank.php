<?php

namespace isanasan\phptddbook;

class Bank
{
    public function reduce (Expression $source,string $to)
    {
        $sum = $source;
        return $sum->reduce($to);
    }
}
