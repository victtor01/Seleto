<?php

namespace app\controllers;

class Login
{
    public function index()
    {
        if(isset($_SESSION['user']) || isset($_SESSION['accesskey']))
        {
            redirect('/');
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
        validateSession('/login');

        $email =  filter_input(INPUT_POST, 'email' , FILTER_SANITIZE_EMAIL);
        $senha =  filter_input(INPUT_POST, 'senha' , FILTER_DEFAULT);
        
        $user = findby(table: 'users', field: 'email', value: "{$email}");

        if(! $user)
        {
            return redirect('/login');
        }

        if(!password_verify($senha, $user['password']))
        {
            redirect('/login');
            die("Senha não confirma!");
        }

        $_SESSION['user'] = $user;

        return redirect('/');
    }

    public function withoutLogin()
    {
        $_SESSION['accesskey'] = uniqid();
        redirect('/home');
    }
}