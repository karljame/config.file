<?php

return [
    'database' => [
        'local' => [
            'host'=> 'localhost',
            'database' => 'mytodo',
            'user'=> 'root',
            'password' => '',
            'options' => [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]
        ],
        'zone' => [
            'host'=> ' ',
            'database' => '',
            'user'=> '',
            'password' => '',
            'options' => [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]
        ]
    ]
];
