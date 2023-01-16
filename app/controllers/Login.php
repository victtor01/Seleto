<?php

namespace app\controllers;

class Login
{
    public function index()
    {
        if(validateSession())
        {
            return redirect('/');
            die();
        }

        return [
            'view' => 'login.php',
            'data' => [
                'title' => 'Login'
            ]
        ];
    }

    public function store()
    {
        $email =  valideFromSqlInjection(filter_input(INPUT_POST, 'email' , FILTER_SANITIZE_EMAIL));
        $senha =  valideFromSqlInjection(filter_input(INPUT_POST, 'senha' , FILTER_DEFAULT));
        $user = findby(table: 'users', field: 'email', value: "{$email}");

        if(! $user)
        {
            return redirect('/login');
        }

        password_verify($senha, $user['senha']) ?  $_SESSION['user'] = $user : redirect('/login');

        $_SESSION['user'] = $user;

        return redirect('/');
    }
}