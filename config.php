<?php
return [
    'database'=>[
        'name' => 'beginners',
        'username' => 'root',
        'password' => 'root',
        'connection' => 'mysql:host=127.0.0.1:8889',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ],
    ]

];