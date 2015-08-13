<?php

namespace phpUnitTutorial\Test;

// explicitly call the Composer Autoloader (JSON in compose.json not working?)
require_once __DIR__ . '/../../../vendor/autoload.php';

class AutoloaderTest extends \PHPUnit_Framework_TestCase
{
    public function testAutoloaderRequire()
    {
        // have to have a test function to pass ...
    }
}