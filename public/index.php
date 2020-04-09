<?php

require_once '../vendor/autoload.php';

use App\wcs\Hello;

$hi = new Hello();
echo $hi->Talk();