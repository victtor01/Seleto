<?php


function all(string $table, string $fields = "*")
{
    try {
        $sql = "SELECT {$fields} FROM {$table}";
        $query = connect()->query($sql);
        return $query->fetch_all();
    } 
    catch (\Throwable $th) {
        die('Houve um Erro al tentar executar a query All! ' . $th);
    }
}

function findby(string $table, string $field, string $value, string $fields  = '*')
{
    try {
        $sql = "SELECT {$fields} FROM {$table} WHERE {$field} = '{$value}'";
        $query = connect()->query($sql);
        return $query->fetch_assoc();
    } 
    catch (\Throwable $th) {
        die('Houve um Erro ao tentar executar a query findby! ' . $th);
    }
    
}