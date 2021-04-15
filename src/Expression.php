<?php

namespace isanasan\phptddbook;

interface Expression
{
    public function plus(Expression $addend);
    public function reduce(Bank $bank,string $to):Money;
}
