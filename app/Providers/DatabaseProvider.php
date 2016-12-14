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
    public function boot() {}

    /**
     * Triggered when provider is registered with Application container.
     *
     * @return mixed
     */
    public function register() {

        $capsule = new Capsule;

        $capsule->addConnection([
//            'driver'    => app()->config('database.driver'),
//            'host'      => app()->config('database.host'),
//            'database'  => app()->config('database.database'),
//            'username'  => app()->config('database.username'),
//            'password'  => app()->config('database.password'),
//            'charset'   => app()->config('database.charset'),
//            'collation' => app()->config('database.collation'),
//            'prefix'    => app()->config('database.prefix'),
        ]);

        $capsule->bootEloquent();

    }
}