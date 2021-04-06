<?php

namespace isanasan\phptddbook;

class Money
{
    protected $amount;

    public function equals(Money $object): bool
    {
        return $this->amount === $object->amount;
    }
}
