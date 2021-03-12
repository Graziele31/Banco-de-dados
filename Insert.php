<?php

include './conexao/conectMYSQLI.php';
 
$firstname = ($_POST["firstname"]);
$lastname = ($_POST["lastname"]);
$email = ($_POST["email"]);

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('$firstname', '$lastname', '$email');";

if ($conn->multi_query($sql) === TRUE) {
    $ultimo_id = $conn->insert_id;
  echo "Registo criado com sucesso insert <br>".$ultimo_id;;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
