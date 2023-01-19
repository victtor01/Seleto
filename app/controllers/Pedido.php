<?php

namespace app\controllers;

class Pedido
{
    public function index()
    {
        if(!validateSession())
        {
            return redirect('/login');
        }

        if(isset($_SESSION['order']))
        {
            $value = implode(', ', array_keys($_SESSION['order']));
            read(table: 'product');
            where(field: "id", option: 'in', value: "({$value})");
        }

        $products = isset($_SESSION['order']) ? execute() : [];

        return [
            'view' => 'pedido.php',
            'data' =>
            [
                'title' => 'Pedido',
                'products' => $products
            ]
        ];
    }

    public function insert()
    {
        $_SESSION['order'][$_POST['object']['id']] = $_POST['object']['quantidade'];

        if($_SESSION['order'][$_POST['object']['id']] == 0)
        {
            unset ($_SESSION['order'][$_POST['object']['id']]);
        }

        if(count($_SESSION['order']) == 0)
        {
            unset ($_SESSION['order']);
        }
        
        echo json_encode([$_SESSION['order']]);
    }
}