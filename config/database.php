<?php

return [
    'database_connection' => [
        'driver'        => 'mysql',
        'host'          => env('CONN_REVIEWS_IP', config('jtreviewsconfig.conn_reviews_ip')),
        'port'          => env('CONN_REVIEWS_PT', config('jtreviewsconfig.conn_reviews_pt')),
        'database'      => env('CONN_REVIEWS_DB', config('jtreviewsconfig.conn_reviews_db')),
        'username'      => env('CONN_REVIEWS_UN', config('jtreviewsconfig.conn_reviews_un')),
        'password'      => env('CONN_REVIEWS_PW', config('jtreviewsconfig.conn_reviews_pw')),
        'charset'       => 'utf8mb4',
        'collation'     => 'utf8mb4_unicode_ci',
        'prefix'        => ''
    ],
];