<?php

/*------------------------------------------------------------
 | Load the bootstrap of the application.
 |------------------------------------------------------------
 |
 | This gets the application and any of its requirements
 | included and ready to be used.
 |
 */

require __DIR__ . '/../bootstrap/bootstrap.php';

/*----------------------------------------------------------------------------
| Application Boot
|-----------------------------------------------------------------------------
|
| Get everything ready for the application to run.
|
|---------------------------------------------------------------------------*/

$app = require __DIR__ . '/../bootstrap/application.php';

/*----------------------------------------------------------------------------
| Launch the Application
|-----------------------------------------------------------------------------
|
| Get the incoming request, handle it, and return a response from within the
| application runtime.
|
|---------------------------------------------------------------------------*/

$kernel = $app->make(\Phire\Support\Contracts\Http\Kernel::class);

/*----------------------------------------------------------------------------
| Bootstrap
|-----------------------------------------------------------------------------
|
| Go over the bootstrap classes and add handle them appropriately
| within the application container.
|
|---------------------------------------------------------------------------*/

$kernel->bootstrap();

