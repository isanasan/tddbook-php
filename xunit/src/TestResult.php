<?php

declare(strict_types=1);

namespace isanasan\phptddbook;

class TestResult
{
    private $runCount;
    private $errorCount;

    public function __construct()
    {
        $this->runCount = 0;
        $this->errorCount = 0;
    }

    public function testStarted()
    {
        $this->runCount++;
    }

    public function testFalled()
    {
        $this->errorCount++;
    }

    public function summary()
    {
        return "$this->runCount run, $this->errorCount failed";
    }
}
