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
        assert("setUp testMethod" === $this->test->log);
    }
}

(new TestCaseTest('testTemplateMethod'))->run();
