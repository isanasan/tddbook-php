<?php

namespace isanasan\phptddbook;

require_once __DIR__ . '/../vendor/autoload.php';

$test = new WasRun("testMethod");
echo $test->wasRun . PHP_EOL;
$test->run();
echo $test->wasRun . PHP_EOL;
