<?php

namespace app\controllers;

use function PHPSTORM_META\sql_injection_subst;

class Location 
{
    public function index()
    {
        return [
            'view' => 'address.php',
            'data' => ['title' => 'Endereços'] 
        ];
    }

    public function remove()
    {
        $id = valideFromSqlInjection($_POST['id']);

        if(delete(table: 'address', field: 'id', value: "{$id}"))
        {
            echo json_encode(true);
        }

        echo json_encode(false);
    }
}