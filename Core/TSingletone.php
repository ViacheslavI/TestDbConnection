<?php

trait  TSingletone
{
    protected static $instance;

    public function instance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}