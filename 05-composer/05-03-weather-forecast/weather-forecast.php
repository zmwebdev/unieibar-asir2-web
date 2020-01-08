<?php

// include composer autoload
//require __DIR__ . '/vendor/autoload.php';
require 'vendor/autoload.php';

use DmitryIvanov\DarkSkyApi\DarkSkyApi;
$forecast = (new DarkSkyApi('03ad9b2373f0c2c60eec73c139078b28'))
    ->location(43.1800579, -2.4892857)
    ->units('si')
    ->language('en')
    ->forecast(['currently', 'daily']);
echo $forecast->currently()->summary();