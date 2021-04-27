<?php

namespace isanasan\phptddbook;

class WasRun extends TestCase
{
    public $wasRun;
    public $wasSetUp;

    public function __construct($name)
    {
        $this->wasRun = 'none';

        parent::__construct($name);
    }

    public function setUp()
    {
        $this->wasSetUp = 1;
    }

    public function testMethod()
    {
        $this->wasRun = 1;
    }
}
