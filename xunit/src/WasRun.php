<?php

namespace isanasan\phptddbook;

class WasRun
{
    public $wasRun;
    public $name;

    public function __construct($name)
    {
        $this->wasRun = 'none';
        $this->name = $name;
    }

    public function run()
    {
        call_user_func([$this, $this->name]);
    }

    public function testMethod()
    {
        $this->wasRun = 1;
    }
}
