<?php

namespace isanasan\phptddbook;

class WasRun extends TestCase
{
    public $wasRun;

    public function __construct($name)
    {
        $this->wasRun = 'none';

        parent::__construct($name);
    }

    public function testMethod()
    {
        $this->wasRun = 1;
    }
}
