<?php

namespace app\controllers;

class Login
{
    public function index()
    {
        return [
            'view' => 'login.php',
            'data' => [
                'title' => 'Login'
            ]
        ];
    }

    public function store()
    {
        $email = filter_input(INPUT_POST, 'email' , FILTER_SANITIZE_EMAIL);
        $senha = filter_input(INPUT_POST, 'senha' , FILTER_DEFAULT);

        $user = findby(table: 'user', field: 'email', value: "{$email}");

        var_dump($user);

        if(! $user)
        {
            return redirect('/login');
        }

        password_verify($senha, $user['senha']) ?  $_SESSION['user'] = $user : redirect('/login');

        return redirect('/');
    }
}