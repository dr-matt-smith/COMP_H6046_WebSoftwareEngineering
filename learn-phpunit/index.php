<?php

// load Composer AUTOLOADER
require_once __DIR__ . '/vendor/autoload.php';


use phpUnitTutorial\URL;

$url = new URL();
$originalString = 'This string will be sluggified';
print $url->sluggify($originalString);