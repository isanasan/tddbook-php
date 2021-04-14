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
        $this->rates = [
            $rate => new Pair($from, $to)
        ];
    }

    public function rate(string $from, String $to)
    {
        if ($from === $to) return 1;
        return array_search((new Pair($from, $to)), $this->rates);
    }
}
