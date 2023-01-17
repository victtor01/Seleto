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
        '/login/default' => 'Login@withoutLogin',
        '/register' => 'Register@index',
        '/user' => 'User@index',
        '/user/logout' => 'User@destroy'
    ]
];