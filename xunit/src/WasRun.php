<?php

declare(strict_types=1);

namespace isanasan\phptddbook;

error_reporting(E_ALL);

class WasRun extends TestCase
{
    public $wasRun;
    public $wasSetUp;

    public function setUp()
    {
        $this->wasRun = 'none';
        $this->wasSetUp = 1;
    }

    public function testMethod()
    {
        $this->wasRun = 1;
    }
}
