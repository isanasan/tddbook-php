<?php

namespace isanasan\phptddbook;

class Bank
{
    public function reduce(Expression $source, string $to)
    {
        if ($source instanceof Money) {
            return $source->reduce($to);
        }

        $sum = $source;
        return $sum->reduce($to);
    }
}
