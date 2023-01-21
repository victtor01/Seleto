<?php

return [
    'POST' => 
    [
        '/login' => 'Login@store',
        '/register' => 'Register@store',
        '/insert/order' => 'Pedido@insert',
        '/home/search' => 'Home@search',
        '/user/valide' => 'User@valideEmail',
        '/user/location/remove' => 'Location@remove'
    ],
    'GET' => 
    [
        '/' => 'Home@index',
        '/home' => 'Home@index',
        '/home/category/[1-9]+' => 'Home@index',    

        '/login' => 'Login@index',
        '/login/default' => 'Login@withoutLogin',

        '/register' => 'Register@index',

        '/pedido' => 'Pedido@index',

        '/user' => 'User@index',
        '/user/logout' => 'User@destroy',

        '/user/address' => 'Location@index',
    ]
];