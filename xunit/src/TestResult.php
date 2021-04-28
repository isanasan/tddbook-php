<?php


declare(strict_types=1);

namespace isanasan\phptddbook;

class TestResult
{
    public $runCount;

    public function __construct()
    {
        $this->runCount = 0;
    }

    public function testStarted()
    {
        $this->runCount++;
    }

    public function summary()
    {
        return "$this->runCount run, 0 failed";
    }
}
