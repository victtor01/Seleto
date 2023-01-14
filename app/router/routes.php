<?php

return [
    'POST' => 
    [
        '/login' => 'Login@store'
    ],
    'GET' => 
    [
        '/login' => 'Login@index',
        '/home' => 'Home@index'
    ]
];