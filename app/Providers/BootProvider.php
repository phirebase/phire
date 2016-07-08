<?php

namespace App\Providers;

use Phire\Http\Routing\Route;
use Phire\Support\Provider;

/**
 * Class BootProvider
 *
 * @package App\Providers
 */
class BootProvider extends Provider {

	/**
	 * Boot BootProvider class.
	 */
	public function boot() {

		return self::loadRoutes();

	}

	/**
	 * Load the routes into the application.
	 * 
	 * @return mixed
	 */
	private static function loadRoutes() {

		new Route();

		require app_path('Http/routes.php');

		return Route::dispatchAll();

	}

}