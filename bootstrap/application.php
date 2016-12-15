<?php

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
 | Load Bindings into Container
 |------------------------------------------------------------
 |
 | Here we can use the bind() and singleton() container methods
 | to add bindings into the application, we do this here so
 | that they are available throughout the application.
 |
 */

$app->singleton(
    \Phire\Support\Contracts\Http\Kernel::class,
    \App\Http\Kernel::class
);

return $app;
