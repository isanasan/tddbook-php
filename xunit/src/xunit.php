<?php

namespace isanasan\phptddbook;

require_once __DIR__ . '/../vendor/autoload.php';

$test = new WasRun("testMethd");
echo $test->wasRun();
$test->testMethod();
echo $test->wasRun;
