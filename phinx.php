<?php

return [
    'paths' => [
        'migrations' => '%%PHINX_CONFIG_DIR%%/db/migrations',
        'seeds' => '%%PHINX_CONFIG_DIR%%/db/seeds',
    ],
    'environments' => [
        'default_migration_table' => 'phinxlog',
        'default_environment' => 'development',
        'production' => [
            'adapter' => 'mysql',
            'host' => 'localhost',
            'name' => 'db1_gwalke01', // Your production database name
            'user' => 'root',         // Your MySQL username
            'pass' => '',             // Your MySQL password (empty if none)
            'port' => '3307',         // Default MySQL port
            'charset' => 'utf8',      // Charset for database connection
        ],
        'development' => [
            'adapter' => 'mysql',
            'host' => 'localhost',
            'name' => 'db1_gwalke01',  // Your development database name
            'user' => 'root',          // Your MySQL username
            'pass' => '',              // Your MySQL password (empty if none)
            'port' => '3307',          // Default MySQL port
            'charset' => 'utf8',       // Charset for database connection
        ],
        'testing' => [
            'adapter' => 'mysql',
            'host' => 'localhost',
            'name' => 'db1_gwalke01',  // Your testing database name
            'user' => 'root',          // Your MySQL username
            'pass' => '',              // Your MySQL password (empty if none)
            'port' => '3307',          // Default MySQL port
            'charset' => 'utf8',       // Charset for database connection
        ],
    ],
    'version_order' => 'creation', // Ensures migrations are ordered by creation date
];