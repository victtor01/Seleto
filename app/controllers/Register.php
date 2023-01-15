<?php

namespace app\controllers;

class Register
{
    public function index()
    {
        return[
            'view' => 'registro.php',
            'data' => [
                'title' => 'Registro'
            ]
        ];
    }

    public function store()
    {
        
    }
}