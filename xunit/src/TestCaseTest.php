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
        $result = new TestResult();
        $this->test->run($result);
        assert("setUp testMethod tearDown" === $this->test->log);
    }

    public function testResult()
    {
        $this->test = new WasRun("testMethod");
        $result = new TestResult();
        $this->test->run($result);
        assert("1 run, 0 failed" === $result->summary());
    }

    public function testFalledResult()
    {
        $this->test = new WasRun("testBrokenMethod");
        $result = new TestResult();
        $this->test->run($result);
        assert("1 run, 1 failed" === $result->summary());
    }

    public function testFalledResultFormatting()
    {
        $result = new TestResult();
        $result->testStarted();
        $result->testFalled();
        assert("1 run, 1 failed" === $result->summary());
    }

    public function testSuite()
    {
        $suite = new TestSuite();
        $suite->add(new WasRun("testMethod"));
        $suite->add(new WasRun("testBrokenMethod"));
        $result = new TestResult();
        $suite->run($result);
        assert("2 run, 1 failed" === $result->summary());
    }
}

ini_set('assert.active', '1');
ini_set('assert.exception', '1');

$suite = new TestSuite();
$suite->add(new TestCaseTest("testTemplateMethod"));
$suite->add(new TestCaseTest("testResult"));
$suite->add(new TestCaseTest("testFalledResult"));
$suite->add(new TestCaseTest("testFalledResultFormatting"));
$suite->add(new TestCaseTest("testSuite"));
$result = new TestResult();
$suite->run($result);
echo $result->summary() . PHP_EOL;
