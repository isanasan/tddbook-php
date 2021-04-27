<?php

namespace isanasan\phptddbook;

require_once __DIR__ . '/../vendor/autoload.php';

class TestCaseTest extends TestCase
{
    public function testRunning()
    {
        $test = new WasRun('testMethod');
        assert(!$test->wasRun);
        $test->run();
        assert($test->wasRun);
    }
}

(new TestCaseTest('testRunning'))->run();
