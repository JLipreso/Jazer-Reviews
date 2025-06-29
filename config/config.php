<?php

return [
    /** Project Configurations */
    'project_refid'                 => env('PROJECT_REFID', ''),


    /** Database Connection Configurations */
    'conn_reviews_ip'                 => env('CONN_REVIEWS_IP', env('DB_HOST')),
    'conn_reviews_pt'                 => env('CONN_REVIEWS_PT', env('DB_PORT')),
    'conn_reviews_db'                 => env('CONN_REVIEWS_DB', env('DB_DATABASE')),
    'conn_reviews_un'                 => env('CONN_REVIEWS_UN', env('DB_USERNAME')),
    'conn_reviews_pw'                 => env('CONN_REVIEWS_PW', env('DB_PASSWORD')),

    /** Query parameters */
    'fetch_paginate_max'            => env('FETCH_PAGINATE_MAX', 25),
];
