<?php

function delete(string $table, string $field, string $value)
{
    try {
        $sql = "DELETE FROM {$table} WHERE {$field} = {$value}";
        $query = connect()->query($sql);
        return true;
    } catch (\Throwable $th) {
        return false;
    }
    
}