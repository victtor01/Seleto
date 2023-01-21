<?php

namespace app\controllers;

class User
{
    
    public function index()
    {
        if(! validateSession())
        {
            return redirect('/login');
            die();
        }

        $user = isset($_SESSION['user']) ? $_SESSION['user'] : $_SESSION['accesskey'];

        return [
            'view' => 'user.php',
            'data' => [
                'title' => 'Usuário',
                'user' => $user
            ]
        ];
    }

    public function destroy()
    {
        session_destroy();
        redirect('/');
        die();
    }

    public function valideEmail()
    {
        require ROOT . '/app/helpers/email.php';
        return redirect('/user');
    }
}