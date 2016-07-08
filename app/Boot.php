<?php

require __DIR__ . '/../vendor/autoload.php';

/*------------------------------------------------------------
 | Load the Application
 |------------------------------------------------------------
 |
 | Load the application into runtime.
 |
 */

$app = new \Phire\Support\Factory\Application(
	realpath(__DIR__ . '/../')
);

/*------------------------------------------------------------
 | Config
 |------------------------------------------------------------
 |
 | Get the application config.
 |
 */

$config = require config_path('app.php');

/*------------------------------------------------------------
 | Providers
 |------------------------------------------------------------
 |
 | Load providers into application runtime.
 |
 */

\Phire\Support\Booter::bootProviders($config['providers']);

