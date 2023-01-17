<?php


function all(string $table, string $fields = "*")
{
    try {
        $sql = "SELECT {$fields} FROM {$table}";
        return refactorQuery( connect()->query($sql) );
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

function refactorQuery($query)
{
    $refactor = [];
    foreach($query as $chave => $data)
    {
        $refactor[$chave] = $data;
    } 
    return $refactor;
}