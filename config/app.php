<?php

/*
 * Application config.
 */
return [
	
	/*
	 * Class aliases
	 */
	'aliases' => [
		
		'Route' => \Phire\Http\Routing\Route::class,
		'Model' => \Illuminate\Database\Eloquent\Model::class,
		
	],

	/*
	 * Application providers
	 */
	'providers' => [

		'BootProvider' => \App\Providers\BootProvider::class,
		'DatabaseProvider' => \App\Providers\DatabaseProvider::class,

	],
	
];
