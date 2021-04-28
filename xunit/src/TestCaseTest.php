<?php

declare(strict_types=1);

namespace isanasan\phptddbook;

require_once __DIR__ . '/../vendor/autoload.php';

class TestCaseTest extends TestCase
{
    private $test;

    public function setUp()
    {
        $this->test = new WasRun("testMethod");
    }

    public function testRunning()
    {
        $this->test->run();
        assert($this->test->wasRun);
    }

    public function testSetUp()
    {
        $this->test->run();
        assert("setUp testMethod" === $this->test->log);
    }
}

(new TestCaseTest('testRunning'))->run();
(new TestCaseTest('testSetUp'))->run();
