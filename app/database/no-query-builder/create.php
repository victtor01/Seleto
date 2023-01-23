<?php

function create(string $table, array $data)
{
    try 
    {
        $fields = implode(", ", array_keys($data));
        $values = '"' . implode('","', $data) . '"';

        $sql = "INSERT INTO {$table}($fields) VALUES ($values)";
        $query = connect()->query($sql);
        
    } 

    catch (\Throwable $th) 
    {
        die('houve algum erro no Create!' . $th);
    }

}