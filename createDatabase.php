<?php //

include './conexao/conectMYSQLI.php';
//Criar conexao
$sql = "CREATE DATABASE DBGrazy";
if ($conn->query($sql) === TRUE) {
    echo "Database criada com sucesso";
} else {
    echo "Erro ao criar database: " . $conn->error;
}
 
$conn->close();