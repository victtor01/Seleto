<?php

function where(string $field, string $value, string $option = "=")
{
    global $query;
    $query['where'] = true;
    $query['sql'] .= "WHERE {$field} {$option} {$value} ";
}