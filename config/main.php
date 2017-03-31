<?php

//define('DB_CONNINFO_LOG', 'host=localhost port=5432 user=postgres password=654321 dbname=control');
//define('DB_CONNINFO_DATA', 'host=localhost port=5432 user=postgres password=654321 dbname=control');
define('DB_PATH_DATA', '/etc/controller/alr/data.db');
define('DB_PATH_PUBLIC', '/etc/controller/public.db');

function f_getConfig() {
    return [
        'db' => [
            'use' => 'l'
        ],
        'acp' => [
            'use' => '1'
        ],
        'sock' => [
            'use' => '1',
            'port' => 49174,
            'addr' => '127.0.0.1',
            'timeout'=>1
        ],
        'session' => [
            'use' => '4',
        ],
        'check' => [
            'use' => [1],
        ]
    ];
}
