<?php

namespace app\controllers;

class Pedido
{
    public function index()
    {

        validateSession('/login');

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

    public function pay()
    {
        if(!isset($_SESSION['order']))
        {
            return redirect('/pedido');
        }

        $total = 0;

        foreach($_SESSION['order'] as $prop => $value)
        {
            $price = findby(table: 'product', fields:'price', field: 'id', value: "{$prop}")["price"];
            $total += ($price * $value);
        }

        return [
            'view' => 'pagamento.php',
            'data' => ['title' => 'finalizar Pedido', 'price' => $total],
        ];
    }

    public function insert()
    {
        validateSession('/login');

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

    public function store()
    {
        validateSession('/login');

        if(!isset($_SESSION['order']))
        {
            return redirect('/');
        }

        if(isset($_SESSION['accesskey'])){

            $name = $_SESSION['address']['name'] ;
            $city = $_SESSION['address']['city'] ;
            $neighborhood = $_SESSION['address']['neighborhood'] ;
            $street = $_SESSION['address']['street'] ;
            $number = $_SESSION['address']['number'] ;
            $reference = $_SESSION['address']['reference'];

            $key = $_SESSION['accesskey'];

            # CRIAR E LER ENDEREÇO

                create(table: 'address', data: [
                    'name' => "{$name}", 
                    'city' => "{$city}", 
                    'neighborhood' => "{$neighborhood}", 
                    'street' => "{$street}", 
                    'number' => "{$number}", 
                    'reference' => "{$reference}", 
                    '`key`' => "{$key}"
                ]);
 
                read(table: 'address');
                where(field: '`key`', value: "'{$key}'");
                andread(field: 'id', fields: 'MAX(id)', table: '`address`', field1: "`key`", value: "'{$key}'");

                $address = execute()[0]['id'];
                $address = intval($address);

            # CRIAR E LER PEDIDO

                create(table: '`order`', data: ['`key`' => "{$key}", '`status`' => '1', 'address' => "{$address}"]);

                read(table: '`order`');
                where(field: '`key`', value: "'{$key}'");
                andread(field: 'data_order', fields: 'MAX(data_order)', table: '`order`', field1: "`key`", value: "'{$key}'");
                
                $order = execute()[0]['id'];
                $order = intval($order);
        }

        if(isset($_SESSION['user']))
        {

        }

        # CRIAR PRODUTOS QUE ENTRARAO NO PEDIDO
            
        foreach($_SESSION['order'] as $id => $value)
        {
            create(table: 'order_product', data: ['id_order' => "{$order}", 'id_product' => "{$id}", 'quantity' => "{$value}"]);
            $product = findby(table: 'product', field: 'id', value: "{$id}", fields: 'quantity');
            $quantity = $product["quantity"];
            $newvalue = intval($quantity) - intval($value);
            update(table: 'product', field: 'quantity', value: "{$newvalue}", wherefield: 'id', wherevalue: "{$id}");
        }

        #LIMPAR TODOS OS PEDIDOS

        unset($_SESSION['order']);
    }
}