<?php

return [
    'POST' => 
    [
        '/login' => 'Login@store',
        '/register' => 'Register@store'
    ],
    'GET' => 
    [
        '/' => 'Home@index',
        '/home' => 'Home@index',
        '/login' => 'Login@index',
        '/register' => 'Register@index'
    ]
];