<?php 

function validateSession()
{
    return isset($_SESSION['user']) || isset($_SESSION['id']) ? true : false;
}