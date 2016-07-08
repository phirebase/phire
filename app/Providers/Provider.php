<?php

namespace App\Providers;

/**
 * Class Provider
 * 
 * @package App\Providers
 */
abstract class Provider {

	/**
	 * Boot method.
	 *
	 * @return mixed
	 */
	abstract public function boot();

}