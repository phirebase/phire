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
	 * Triggered when provider is registered with Application container.
	 *
	 * @return mixed
	 */
	public function register() {

		self::loadRoutes();

	}

	/**
	 * Boot method.
	 *
	 * @return mixed
	 */
	public function boot() {}

	/**
	 * Load the routes into the application.
	 *
	 * @return mixed
	 */
	private static function loadRoutes() {

		new Route([

			'controllerNamespace' => '\\App\\Http\\Controllers\\',

		]);

		require app_path('Http/routes.php');

		return Route::dispatchAll();

	}

}
