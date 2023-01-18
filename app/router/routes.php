<?php

return [
    'POST' => 
    [
        '/login' => 'Login@store',
        '/register' => 'Register@store',
        '/insert/order' => 'Pedido@insert'
    ],
    'GET' => 
    [
        '/' => 'Home@index',
        '/home' => 'Home@index',
        '/login' => 'Login@index',
        '/register' => 'Register@index',
        '/pedido' => 'Pedido@index',
        '/user' => 'User@index',

        '/login/default' => 'Login@withoutLogin',
        '/user/logout' => 'User@destroy',
    ]
];