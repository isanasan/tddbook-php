<?php

declare(strict_types=1);

namespace isanasan\phptddbook;

require_once __DIR__ . '/../vendor/autoload.php';

class TestCaseTest extends TestCase
{
    private $test;

    public function testTemplateMethod()
    {
        $this->test = new WasRun("testMethod");
        $this->test->run();
        assert("setUp testMethod tearDown" === $this->test->log);
    }

    public function testResult()
    {
        $this->test = new WasRun("testMethod");
        $result = $this->test->run();
        assert("1 run, 0 failed" === $result->summary());
    }

    public function testFalledResult()
    {
        $this->test = new WasRun("testBrokenMethod");
        $result = $this->test->run();
        assert("1 run, 1 failed" === $result->summary());
    }

    public function testFalledResultFormatting()
    {
        $result = new TestResult();
        $result->testStarted();
        $result->testFalled();
        assert("1 run, 1 failed" === $result->summary());
    }
}

ini_set('assert.active', '1');
ini_set('assert.exception', '1');

echo (new TestCaseTest('testTemplateMethod'))->run()->summary() . PHP_EOL;
echo (new TestCaseTest('testResult'))->run()->summary() . PHP_EOL;
echo (new TestCaseTest('testFalledResult'))->run()->summary() . PHP_EOL;
echo (new TestCaseTest('testFalledResultFormatting'))->run()->summary() . PHP_EOL;
