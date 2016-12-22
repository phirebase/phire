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
*/

$app = require __DIR__ . '/../bootstrap/application.php';

/*----------------------------------------------------------------------------
| Create the application kernel.
|-----------------------------------------------------------------------------
|
| Create an instance of the Kernel to handle incomming requests, and allow
| bootstrapping of application.
|
*/

$kernel = $app->make(\Phire\Support\Contracts\Http\Kernel::class);

/*----------------------------------------------------------------------------
| Bootstrap
|-----------------------------------------------------------------------------
|
| Go over the bootstrap classes and add handle them appropriately
| within the application container.
|
*/

$kernel->bootstrap();

/*----------------------------------------------------------------------------
| Request and Response
|-----------------------------------------------------------------------------
|
| Get the current request, translate into a response and send the response.
|
*/

$request = \Phire\Http\Request::gather();

$response = $kernel->handle($request);
$response->send();
