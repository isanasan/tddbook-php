<?php

namespace isanasan\phptddbook;

class Sum implements Expression
{
    public $augend;
    public $addend;

    public function __construct(Money $augend,Money $addend)
    {
        $this->augend = $augend;
        $this->addend = $addend;
    }
}
