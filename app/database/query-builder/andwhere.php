<?php

function andWhere(string $field, string $value, string $option = "=")
{
    global $query;

    if(! $query['where'])
    {
        die('O andWhere tem que ser executado após o where!');
    }

    $query['sql'] .= "AND {$field} {$option} {$value} ";
}