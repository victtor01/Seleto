<?php

namespace app\controllers;

class Home
{
    public function index()
    {
        if(! validateSession())
        {
            return redirect('/login');
            die();
        }

        read(table: 'product');
        $products = execute();

        return [
            'view' => 'home.php',
            'data' => [
                'title' => 'Home',
                'products' => $products
            ]
        ];
    }
}