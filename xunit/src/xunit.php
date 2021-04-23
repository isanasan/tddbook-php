<?php

namespace isanasan\phptddbook;

require_once __DIR__ . '/../vendor/autoload.php';

$test = new WasRun("testMethd");
echo $test->wasRun . PHP_EOL;
$test->testMethod();
echo $test->wasRun . PHP_EOL;
