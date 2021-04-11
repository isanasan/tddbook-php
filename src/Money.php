<?php

namespace isanasan\phptddbook;

class Money implements Expression
{
    protected $amount;
    protected $currency;

    public function __construct(int $amount, string $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    public function times(int $multiplier)
    {
        return new Money($this->amount * $multiplier, $this->currency);
    }

    public function plus(Money $addend):Money
    {
        return new Money($this->amount + $addend->amount,$this->currency);
    }

    public function currency()
    {
        return $this->currency;
    }

    public function equals(Money $object): bool
    {
        return $this->amount === $object->amount
            && $this->currency === $object->currency;
    }

    public static function dollar(int $amount): Money
    {
        return (new Money($amount, "USD"));
    }

    public static function franc(int $amount): Money
    {
        return (new Money($amount, "CHF"));
    }
}
