<?php

declare(strict_types=1);

namespace isanasan\phptddbook;

class WasRun extends TestCase
{
    public $log;

    public function setUp()
    {
        $this->log = "setUp";
    }

    public function testMethod()
    {
        $this->wasRun = true;
        $this->log = "$this->log testMethod";
    }

    public function tearDown()
    {
        $this->log = "$this->log tearDown";
    }
}
