<?php

function like(string $field, string $value)
{
    global $query;

    $query['sql'] .= "WHERE {$field} LIKE '%{$value}%' ";
}