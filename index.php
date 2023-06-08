<?php

use Classes\Autoloader;



define('ROOT', __DIR__);
define('FROM_INDEX', true);

require_once ROOT . '/Classes/Autoloader.php';
Autoloader::register();


require_once ROOT . '/vendor/altorouter/altorouter/AltoRouter.php';
require_once ROOT .'/routes.php';
