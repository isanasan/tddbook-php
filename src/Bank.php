<?php

namespace isanasan\phptddbook;

class Bank
{
    public function reduce(Expression $source, string $to)
    {
        return $source->reduce($to);
    }

    public function addRate(string $from,String $to,int $rate)
    {
    }
}
