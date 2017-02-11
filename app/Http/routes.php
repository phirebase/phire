<?php

/*------------------------------------------------------------
 | Routes
 |------------------------------------------------------------
 |
 | Define your routes in this file. Currently supported are,
 | GET, POST, PUT, DELETE, OPTION, CONNECT.
 |
 */

Route::get('/', 'MyController:index');

Route::group(['prefix' => '/0.0.x'], function () {

    Route::get('/', function () {
        return response()->withView('index');
    });

});
