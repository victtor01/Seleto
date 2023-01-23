<?php

return [
    'POST' => 
    [
        '/login' => 'Login@store',
        '/register' => 'Register@store',
        '/insert/order' => 'Pedido@insert',
        '/home/search' => 'Home@search',
        '/user/valide' => 'User@valideEmail',
        '/user/address/remove' => 'Address@remove',
        '/user/address/add' => 'Address@store',
        '/pedido/pagamento' => 'Pedido@store'
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
        '/pedido/pagamento' => 'Pedido@pay', 
        '/pedido/endereco' => 'Address@add',
        '/user' => 'User@index',
        '/user/logout' => 'User@destroy',
        '/user/address' => 'Address@index',
        '/user/address/add' => 'Address@add'
    ]
];