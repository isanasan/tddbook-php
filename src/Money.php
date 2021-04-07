<?php

namespace isanasan\phptddbook;

class Money
{
    protected $amount;

    public function equals(Money $object): bool
    {
        return $this->amount === $object->amount
                && static::class === get_class($object);
    }

    public static function dollar(int $amount):Dollar
    {
        return (new Dollar($amount));
    }
}
