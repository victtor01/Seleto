<?php

namespace app\controllers;

class Home
{
    public function index()
    {

        if(! validateSession())
        {
            redirect('/login');
            die();
        }

        return [
            'view' => 'home.php',
            'data' => [
                'title' => 'Home'
            ]
        ];
    }
}