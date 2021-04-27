<?php

declare(strict_types=1);

namespace isanasan\phptddbook;

class WasRun extends TestCase
{
    public $wasRun;
    public $wasSetUp;
    public function setUp()

    {
        $this->wasRun = false;
        $this->wasSetUp = true;
    }

    public function testMethod()
    {
        $this->wasRun = true;
    }
}
