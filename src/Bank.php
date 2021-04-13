<?php

namespace isanasan\phptddbook;

class Bank
{
    public function reduce(Expression $source, string $to)
    {
        return $source->reduce($this, $to);
    }

    public function addRate(string $from, String $to, int $rate)
    {
    }

    public function rate(string $from, String $to)
    {
        return ($from === "CHF" && $to === "USD") ? 2 : 1;
    }
}
