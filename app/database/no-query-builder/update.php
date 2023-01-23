<?php 

function update(string $table, $field, $value, $wherefield, $wherevalue)
{
    $sql = "UPDATE {$table} SET {$field} = {$value} WHERE {$wherefield} = {$wherevalue}";
    $query = connect()->query($sql);
}