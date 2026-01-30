<?php

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'formulario-aps';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    if ($conexao->connect_errno) {
        die("Falha na conexão com o Banco de Dados: " . $conexao->connect_error);
    }

    $conexao->set_charset("utf8mb4");

?>