<?php

return [
    'POST' => 
    [
        '/login' => 'Login@store',
        '/register' => 'Register@store'
    ],
    'GET' => 
    [
        '/login' => 'Login@index',
        '/home' => 'Home@index',
        '/register' => 'Register@index'
    ]
];