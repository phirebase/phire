<?php

/*------------------------------------------------------------
 | Register Composer Autoload
 |------------------------------------------------------------
 |
 | Load the composer compiled autoloader into the applicaton
 | runtime.
 |
 */

require __DIR__ . '/../vendor/autoload.php';

/*------------------------------------------------------------
 | Fire up Whoops! error reporting
 |------------------------------------------------------------
 |
 | Whoops is the exception handler used within Phire, it is
 | fired up and registered here.
 |
 */

$whoops = new \Whoops\Run;

$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();
