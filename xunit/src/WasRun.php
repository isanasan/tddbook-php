<?php

declare(strict_types=1);

namespace isanasan\phptddbook;

class WasRun extends TestCase
{
    public $wasRun;
    public $wasSetUp;
    public $log;

    public function setUp()
    {
        $this->wasRun = false;
        $this->wasSetUp = true;
        $this->log = "setUp";
    }

    public function testMethod()
    {
        $this->wasRun = true;
    }
}
