<?php

namespace isanasan\phptddbook;

interface Expression
{
    public function reduce(Bank $bank,string $to):Money;
}
