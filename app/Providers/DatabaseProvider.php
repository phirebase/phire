<?php

namespace App\Providers;

use Phire\Support\Provider;
use Illuminate\Database\Capsule\Manager as Capsule;

/**
 * Class DatabaseProvider
 *
 * @package App\Providers
 */
class DatabaseProvider extends Provider {

    /**
     * Boot DatabaseProvider class.
     */
    public function boot() {

        $capsule = new Capsule;

        $capsule->addConnection(array(
            'driver'    => env( 'DATABASE_DRIVER', 'mysql'),
            'host'      => env( 'DATABASE_HOST', ''),
            'database'  => env( 'DATABASE_NAME', ''),
            'username'  => env( 'DATABASE_USERNAME', ''),
            'password'  => env( 'DATABASE_PASSWORD', ''),
            'charset'   => env( 'DATABASE_CHARSET', 'utf8'),
            'collation' => env( 'DATABASE_COLLATION', 'utf8_unicode_ci'),
            'prefix'    => env( 'DATABASE_PREFIX', '')
        ));

        $capsule->bootEloquent();

    }

}