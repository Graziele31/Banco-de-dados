<?php

$servidor = "localhost";
$usuario = "root";
$senha = "senac";
$database = "DBGrazy";
# Criar conexão
$conn = new mysqli($servidor, $usuario, $senha, $database);

// Checar conecção
if ($conn->connect_error) {
    die("Conexao falhou: " . $conn->connect_error);
}
