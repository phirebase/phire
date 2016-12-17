<?php

namespace App\Http;

use Phire\Framework\Kernel as HttpKernel;

/**
 * Class Kernel.
 *
 * @package App\Http
 */
class Kernel extends HttpKernel {

    /**
     * Classes that are used to bootstrap the application.
     *
     * @var array
     */
    protected $bootstrap = [
        \Phire\Framework\Bootstrap\LoadEnvironment::class,
        \Phire\Framework\Bootstrap\LoadConfiguration::class,
        \Phire\Framework\Bootstrap\PrepareRoutes::class,
        \Phire\Framework\Bootstrap\AliasClasses::class,
    ];

}