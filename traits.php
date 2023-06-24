<?php

trait Logger
{

    public function log($msg)
    {
        echo $msg;
    }
}


class TestClass
{
    use Logger;

    public function __construct($value)
    {
        $this->log($value);
    }
}

new TestClass("test value");
