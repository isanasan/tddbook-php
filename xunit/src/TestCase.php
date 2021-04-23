<?php

namespace isanasan\phptddbook;

class TestCase
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function run()
    {
        call_user_func([$this, $this->name]);
    }
}
