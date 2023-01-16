<?php

namespace app\controllers;

class Register
{
    public function index()
    {
        if(validateSession())
        {
            return redirect('/');
            die();
        }

        return[
            'view' => 'registro.php',
            'data' => [
                'title' => 'Registro'
            ]
        ];
    }

    public function store()
    {
        $name = filter_input(INPUT_POST, 'name' , FILTER_DEFAULT);
        $lastname = filter_input(INPUT_POST, 'lastname' , FILTER_DEFAULT);
        $email = filter_input(INPUT_POST, 'email' , FILTER_SANITIZE_EMAIL);
        $password = filter_input(INPUT_POST, 'senha' , FILTER_DEFAULT);
        $confirmpassword = filter_input(INPUT_POST, 'senha' , FILTER_DEFAULT);

        if($password != $confirmpassword)
        {
            redirect('/register');
            die();
        }

        $name = valideFromSqlInjection($name);
        $email = valideFromSqlInjection($email);
        $lastname = valideFromSqlInjection($lastname);
        $password = valideFromSqlInjection($password);
        $password = password_hash($password, PASSWORD_DEFAULT);

        create(table: 'users', data: ['name' => "{$name}", 'lastname' => "{$lastname}", 'email' => "{$email}", 'password' => "{$password}"]);

        redirect('/login');
    }
}