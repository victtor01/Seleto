<?php

function execute()
{
    global $query;
    return $query = refactorQuery(connect()->query($query['sql']));
}
