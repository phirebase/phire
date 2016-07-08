<?php

/*
 * Load composer dependencies.
 */

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
 | Aliases
 |------------------------------------------------------------
 |
 | Load providers into application runtime.
 |
 */

\Phire\Support\Factory\Aliaser::loadAliases($config['aliases']);

/*------------------------------------------------------------
 | Providers
 |------------------------------------------------------------
 |
 | Load providers into application runtime.
 |
 */

\Phire\Support\Booter::bootProviders($config['providers']);

