<?php

use Phire\Http\Routing\Route;

/*------------------------------------------------------------
 | Routes
 |------------------------------------------------------------
 |
 | Define your routes in this file. Currently supported are,
 | GET, POST, PUT, DELETE, OPTION, CONNECT.
 |
 */

Route::get( '/', function () {

	return response(["Greetings" => "from Phire"])->asJson();

} );

Route::get( '/home', 'MyController:index' );
