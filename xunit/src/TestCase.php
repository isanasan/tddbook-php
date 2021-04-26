<?php

declare(strict_types=1);

namespace isanasan\phptddbook;

require_once __DIR__ . '/../vendor/autoload.php';

class TestCase
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function setUp()
    {
        return null;
    }

    public function run()
    {
        $this->setUp();
        call_user_func([$this, $this->name]);
    }
}
