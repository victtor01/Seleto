<?php

function joinTable(string $table, string $onField, string $onValue, string $option = "=")
{
    global $query;

    $query['sql'] .= "INNER JOIN {$table} ON {$onField} {$option} {$onValue} ";
}
