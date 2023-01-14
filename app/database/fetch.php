<?php


function all()
{

}

function findby(string $table, string $field, string $value, string $fields  = '*')
{
    try {
        $sql = "SELECT {$fields} FROM {$table} WHERE {$field} = '{$value}'";
        $query = connect()->query($sql);
        return $query->fetch_assoc();
    } catch (\Throwable $th) {
        return false;
    }
    
}