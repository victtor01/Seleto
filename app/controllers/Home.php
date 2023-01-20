<?php

namespace app\controllers;

class Home
{
    public function index($search)
    {
        if(! validateSession())
        {
            return redirect('/login');
            die();
        }

        $search = isset($search['category']) ? 
        $search['category'] : '1';

        read(table: 'product'); 
        like(field: 'category', value: "{$search}");
        $products = execute();

        $categories = all(table: 'categories');

        return [
            'view' => 'home.php',
            'data' => [
                'title' => 'Home',
                'products' => $products,
                'categories' => $categories
            ]
        ];
    }

}