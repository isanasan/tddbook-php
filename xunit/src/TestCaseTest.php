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
}

(new TestCaseTest('testTemplateMethod'))->run();
(new TestCaseTest('testResult'))->run();
