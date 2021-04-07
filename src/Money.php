<?php

namespace isanasan\phptddbook;

abstract class Money
{
    protected $amount;

    abstract function times(int $multiplier): Money;

    public function equals(Money $object): bool
    {
        return $this->amount === $object->amount
            && static::class === get_class($object);
    }

    public static function dollar(int $amount): Money
    {
        return (new Dollar($amount));
    }

    public static function franc(int $amount): Money
    {
        return (new Franc($amount));
    }
}
