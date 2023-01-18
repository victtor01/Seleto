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

        return [
            'view' => 'pedido.php',
            'data' =>
            [
                'title' => 'Pedido'
            ]
        ];
    }

    public function insert()
    {
        $_SESSION['order'][$_POST['object']['id']] = $_POST['object']['quantidade'];
        echo json_encode([$_SESSION['order']]);
    }
}