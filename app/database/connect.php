<?php

function connect()
{
    try {
        return new mysqli('localhost', 'root', 'root', 'seleto');
    } catch (\Throwable $th) {
        die('houve um erro ao tentar conectar-se ao banco de dados!');
    }
}