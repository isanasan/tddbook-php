<?php

namespace isanasan\phptddbook;

abstract class Money
{
    protected $amount;

    abstract function times(int $multiplier);

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
