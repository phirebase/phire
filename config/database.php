<?php

/*
 * Application config.
 */
return [

    /*
     * Database driver.
     *
     * Supported: mysql sqlsrv
     */
    'driver'    => env( 'DATABASE_DRIVER', 'mysql'),

    /*
     * Connection credentials.
     */
    'host'      => env( 'DATABASE_HOST', ''),
    'database'  => env( 'DATABASE_NAME', ''),
    'username'  => env( 'DATABASE_USERNAME', ''),
    'password'  => env( 'DATABASE_PASSWORD', ''),

    /*
     * Encoding, collation and table/database prefixes.
     */
    'charset'   => env( 'DATABASE_CHARSET', 'utf8'),
    'collation' => env( 'DATABASE_COLLATION', 'utf8_unicode_ci'),
    'prefix'    => env( 'DATABASE_PREFIX', '')

];