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

return $app;
