<?php

declare(strict_types=1);

namespace isanasan\phptddbook;

error_reporting(E_ALL);

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

    public function testSetUp()
    {
        $test = new WasRun("testMethod");
        $test->run();
        assert($test->wasSetUp());
    }
}

ini_set('assert.active', '1');
ini_set('assert.exception', '1');

(new TestCaseTest('testRunning'))->run();
(new TestCaseTest('testSetUp'))->run();
