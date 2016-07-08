<?php

/*
 * Application config.
 */
return [
	
	/*
	 * Class aliases
	 */
	'alias' => [
		
		'Route' => \Phire\Http\Routing\Route::class,
		
	],

	/*
	 * Application providers
	 */
	'providers' => [

		'BootProvider' => \App\Providers\BootProvider::class,

	],
	
];
