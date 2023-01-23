<?php

namespace app\controllers;

class Address
{
    public function index()
    {
        if(!isset($_SESSION['user']) || empty($_SESSION['user']))
        {
            return redirect('/');
        }

        $id = $_SESSION['user']['id'];

        read(table: 'address');
        where(field: 'id_user', value: "{$id}");
        
        $address = execute();

        return [
            'view' => 'address.php',
            'data' => ['title' => 'Endereços', 'address' => $address] 
        ];
    }

    public function add()
    {
        if(isset( $_SESSION['accesskey']) && !isset( $_SESSION['order'] ))
        {
            return redirect('/pedido');
        }

        return 
        [
            'view' => 'addAddress.php',
            'data' => ['title' => 'Endereços']
        ];
    }

    public function store()
    {
        validateSession('/login');
        
        $name           = $_POST['name']; 
        $city           = $_POST['city']; 
        $neighborhood   = $_POST['neighborhood'];
        $street         = $_POST['street']; 
        $number         = $_POST['number'];
        $reference      = $_POST['reference']; 

        if(!isset($_SESSION['user']))
        {
            $_SESSION['address'] = ['name' => $name, 'city' => $city, 'neighborhood' => $neighborhood, 'street' => $street, 'number' => $number, 'reference' => $reference];
            return redirect('/pedido/pagamento');
        }

        $id = $_SESSION['user']['id'] ;

        create(table: 'address', data: ['name' => "{$name}", 'city' => "{$city}", 'neighborhood' => "{$neighborhood}", 'street' => "{$street}", 'number' => "{$number}", 'reference' => "{$reference}", 'id_user' => "{$id}"]);
        
        return redirect('/pedido/pagamento');
    }

    public function remove()
    {

        $id = valideFromSqlInjection($_POST['object']['id']);

        if(delete(table: 'address', field: 'id', value: "{$id}"))
        {
            echo json_encode(true);
            return;
        }

        echo json_encode(false);
        return;
    }
}