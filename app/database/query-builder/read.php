<?php
$query = '';
function read(string $table, string $fields = '*')
{
    global $query;
    $query['sql'] = "SELECT {$fields} FROM {$table} ";
}