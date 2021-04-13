<?php

namespace isanasan\phptddbook;

class Bank
{
    private $rates = [];

    public function reduce(Expression $source, string $to)
    {
        return $source->reduce($this, $to);
    }

    public function addRate(string $from, String $to, int $rate)
    {
        $this->rates[] = [new Pair($from, $to) => $rate];
    }

    public function rate(string $from, String $to)
    {
        return $this->rates[new Pair($from, $to)];
    }
}
