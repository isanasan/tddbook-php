<?php

declare(strict_types=1);

namespace Isanasan\phptddbook;

class TestSuite
{
    private $tests = [];

    public function add($test)
    {
        $this->tests[] = $test;
    }

    public function run(TestResult $result)
    {
        foreach ($this->tests as $test) {
            $test->run($result);
        }
    }
}
