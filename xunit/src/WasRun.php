<?php

namespace isanasan\phptddbook;

class WasRun extends TestCase
{
    public $wasRun;

    public function __construct($name)
    {
        $this->wasRun = false;

        parent::__construct($name);
    }

    public function testMethod()
    {
        $this->wasRun = true;
    }
}
