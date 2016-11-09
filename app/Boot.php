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

$app->loadConfig();

/*------------------------------------------------------------
 | Aliases
 |------------------------------------------------------------
 |
 | Load providers into application runtime.
 |
 */

\Phire\Support\Factory\Aliaser::loadAliases($app->config('app.aliases'));

/*------------------------------------------------------------
 | Providers
 |------------------------------------------------------------
 |
 | Load providers into application runtime.
 |
 */

\Phire\Support\Booter::bootProviders($app->config('app.providers'));