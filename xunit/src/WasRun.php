<?php

namespace isanasan\phptddbook;

class WasRun
{
    public $name;

    public function __construct($name)
    {
        $this->wasRun = 'none';
    }

    public function testMethod()
    {
        $this->wasRun = 1;
    }
}
