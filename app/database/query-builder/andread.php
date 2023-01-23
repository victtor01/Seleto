<?php

function andread(string $table, string $field , string $value, string $field1, string $fields = '*')
{
    global $query;
    $query['sql'] .= "AND {$field} = (SELECT {$fields} FROM {$table} WHERE {$field1} = {$value})";
    echo $query['sql'];
}