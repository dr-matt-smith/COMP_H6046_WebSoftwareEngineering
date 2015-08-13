<?php

namespace phpUnitTutorial\Test;

use phpUnitTutorial\App;

class AppTest extends \PHPUnit_Framework_TestCase
{
    public function testAppSuccessProperty()
    {
        $app = new App();
        $appSuccess = $app->success;
        $this->assertEquals($appSuccess, true);

    }
}