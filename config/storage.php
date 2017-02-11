<?php

/*
 * Storage/filesystem class.
 */
return [

    'drivers' => [

        /*
         * Default driver to be used.
         */
        'default' => 'local',

        /*
         * Driver used to manipulate local filesystem
         */
        'local' => [
            'class' => \Phire\Support\Storage\Drivers\Local::class,
        ],

        /*
         * FTP Driver.
         */
        'ftp' => [
            'class' => \Phire\Support\Storage\Drivers\FTP\FTP::class,
        ],

    ],

    /*
     * Configuration options for specified drivers.
     */

    'local' => [

        'root' => app()->basePath(),

    ],

    'ftp' => [

        'host' => env('FTP_HOST'),
        'username' => env('FTP_USERNAME'),
        'password' => env('FTP_PASSWORD'),
        'port' => env('FTP_PORT', 21),

    ]


];
