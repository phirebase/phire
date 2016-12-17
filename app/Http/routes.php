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

Route::get('/', 'MyController:index');
