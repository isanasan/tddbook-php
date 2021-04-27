<?php

declare(strict_types=1);

namespace isanasan\phptddbook;

class WasRun extends TestCase
{
    public $wasRun;
    public $wasSetUp;

    // public function __construct($name)
    // {
    //     parent::__construct($name);
    // }

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
