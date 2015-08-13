<?php

namespace phpUnitTutorial;

class App
{
    public $success = false;
    function __construct()
    {
        print 'the APP has been created';

        $url = new URL();
        print (PHP_EOL . 'url created - ');
        $this->success = true;
    }

}