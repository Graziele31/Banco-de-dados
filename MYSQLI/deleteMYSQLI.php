<?php

include '../conexao/conectMYSQLI.php';

$sql = "DELETE FROM MyGuests WHERE id={$_GET['id']}";

if ($conn->query($sql) ===TRUE) {
   echo "Registro deletado com suicesso!";
} else {
    echo 'Erro ao deletar registro'. $conn->error;    
}
$conn->close();
