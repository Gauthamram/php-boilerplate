<?php

return [
    'database' => [
        'name' => 'mytodo',
        'username' => 'root',
        'password' => '',
        'connection' => 'sqlite:db/database-sqlite.db',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ]
    ]
];
