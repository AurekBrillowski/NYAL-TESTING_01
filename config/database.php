<?php

return [

    // ####################################################################### 
    // SECTION: Default Database Connection Name                                       
    // ####################################################################### 

    // NOTE: Leave only one uncommented...

    // 'default' => env('DB_CONNECTION', 'NYAL-Oracle'),
    'default' => env('DB_CONNECTION', 'NYAL-Oracle_Testing'),
    // 'default' => env('DB_CONNECTION', 'NYAL-Oracle_Development'),
    // 'default' => env('DB_CONNECTION', 'NYAL-Oracle_Production'),

    // 'default' => env('DB_CONNECTION', 'NYAL-MySQL'),
    // 'default' => env('DB_CONNECTION', 'NYAL-MySQL_Testing'),
    // 'default' => env('DB_CONNECTION', 'NYAL-MySQL_Development'),
    // 'default' => env('DB_CONNECTION', 'NYAL-MySQL_Production'),


    // ####################################################################### 
    // SECTION: Database Connection Options                                       
    // ####################################################################### 

    'connections' => [

        // ====================================================================
        // A. ORACLE Database Connection Options     

        'NYAL-Oracle' => [
            'driver' => 'oracle',
            'tns' => env('DBO-0_TNS', ''),
            'host' => env('DBO-0_HOST', ''),
            'port' => env('DBO-0_PORT', '1521'),
            'database' => env('DBO-0_DATABASE', ''),
            'username' => env('DBO-0_USERNAME', ''),
            'password' => env('DBO-0_PASSWORD', ''),
            'charset' => env('DBO-0_CHARSET', 'AL32UTF8'),
            'prefix' => env('DBO-0_PREFIX', ''),
            'prefix_schema' => env('DBO-0_SCHEMA_PREFIX', ''),
        ],

        'NYAL-Oracle_Testing' => [
            'driver' => 'oracle',
            'tns' => env('DBO-1_TNS', ''),
            'host' => env('DBO-1_HOST', ''),
            'port' => env('DBO-1_PORT', '1521'),
            'database' => env('DBO-1_DATABASE', ''),
            'username' => env('DBO-1_USERNAME', ''),
            'password' => env('DBO-1_PASSWORD', ''),
            'charset' => env('DBO-1_CHARSET', 'AL32UTF8'),
            'prefix' => env('DBO-1_PREFIX', ''),
            'prefix_schema' => env('DBO-1_SCHEMA_PREFIX', ''),
        ],

        'NYAL-Oracle_Development' => [
            'driver' => 'oracle',
            'tns' => env('DBO-2_TNS', ''),
            'host' => env('DBO-2_HOST', ''),
            'port' => env('DBO-2_PORT', '1521'),
            'database' => env('DBO-2_DATABASE', ''),
            'username' => env('DBO-2_USERNAME', ''),
            'password' => env('DBO-2_PASSWORD', ''),
            'charset' => env('DBO-2_CHARSET', 'AL32UTF8'),
            'prefix' => env('DBO-2_PREFIX', ''),
            'prefix_schema' => env('DBO-2_SCHEMA_PREFIX', ''),
        ],

        'NYAL-Oracle_Production' => [
            'driver' => 'oracle',
            'tns' => env('DBO-3_TNS', ''),
            'host' => env('DBO-3_HOST', ''),
            'port' => env('DBO-3_PORT', '1521'),
            'database' => env('DBO-3_DATABASE', ''),
            'username' => env('DBO-3_USERNAME', ''),
            'password' => env('DBO-3_PASSWORD', ''),
            'charset' => env('DBO-3_CHARSET', 'AL32UTF8'),
            'prefix' => env('DBO-3_PREFIX', ''),
            'prefix_schema' => env('DBO-3_SCHEMA_PREFIX', ''),
        ],


        // ====================================================================
        // B. MySQL Database Connection Options      

        'NYAL-MySQL' => [
            'driver' => 'mysql',
            'host' => env('DBM-0_HOST', '127.0.0.1'),
            'port' => env('DBM-0_PORT', '3306'),
            'database' => env('DBM-0_DATABASE', ''),
            'username' => env('DBM-0_USERNAME', ''),
            'password' => env('DBM-0_PASSWORD', ''),
            'unix_socket' => env('DBM-0_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'strict' => true,
            'engine' => null,
        ],

        'NYAL-MySQL_Testing' => [
            'driver' => 'mysql',
            'host' => env('DBM-1_HOST', '127.0.0.1'),
            'port' => env('DBM-1_PORT', '3306'),
            'database' => env('DBM-1_DATABASE', ''),
            'username' => env('DBM-1_USERNAME', ''),
            'password' => env('DBM-1_PASSWORD', ''),
            'unix_socket' => env('DBM-1_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'strict' => true,
            'engine' => null,
        ],

        'NYAL-MySQL_Development' => [
            'driver' => 'mysql',
            'host' => env('DBM-2_HOST', '127.0.0.1'),
            'port' => env('DBM-2_PORT', '3306'),
            'database' => env('DBM-2_DATABASE', ''),
            'username' => env('DBM-2_USERNAME', ''),
            'password' => env('DBM-2_PASSWORD', ''),
            'unix_socket' => env('DBM-2_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'strict' => true,
            'engine' => null,
        ],

        'NYAL-MySQL_Production' => [
            'driver' => 'mysql',
            'host' => env('DBM-3_HOST', '127.0.0.1'),
            'port' => env('DBM-3_PORT', '3306'),
            'database' => env('DBM-3_DATABASE', ''),
            'username' => env('DBM-3_USERNAME', ''),
            'password' => env('DBM-3_PASSWORD', ''),
            'unix_socket' => env('DBM-3_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'strict' => true,
            'engine' => null,
        ],

        'sqlite' => [
            'driver' => 'sqlite',
            'database' => env('DB_DATABASE', database_path('database.sqlite')),
            'prefix' => '',
        ],


    ],
    // ####################################################################### 


    /*
    |--------------------------------------------------------------------------
    | Migration Repository Table
    |--------------------------------------------------------------------------
    |
    | This table keeps track of all the migrations that have already run for
    | your application. Using this information, we can determine which of
    | the migrations on disk haven't actually been run in the database.
    |
    */

    'migrations' => 'migrations',

    /*
    |--------------------------------------------------------------------------
    | Redis Databases
    |--------------------------------------------------------------------------
    |
    | Redis is an open source, fast, and advanced key-value store that also
    | provides a richer set of commands than a typical key-value systems
    | such as APC or Memcached. Laravel makes it easy to dig right in.
    |
    */

    'redis' => [

        'client' => 'predis',

        'default' => [
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'password' => env('REDIS_PASSWORD', null),
            'port' => env('REDIS_PORT', 6379),
            'database' => env('REDIS_DB', 0),
        ],

        'cache' => [
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'password' => env('REDIS_PASSWORD', null),
            'port' => env('REDIS_PORT', 6379),
            'database' => env('REDIS_CACHE_DB', 1),
        ],

    ],

];
