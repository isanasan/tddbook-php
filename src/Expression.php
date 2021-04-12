<?php

namespace isanasan\phptddbook;

interface Expression
{
    public function reduce(string $to):Money;
}
