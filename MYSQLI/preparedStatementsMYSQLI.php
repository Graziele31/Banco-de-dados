<?php

include '../conexao/conectMYSQLI.php';

// prepare and bind
$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);

$firstname = ($_POST["firstname"]);
$lastname = ($_POST["lastname"]);
$email = ($_POST["email"]);

echo "Novo cadastro realizado com sucesso!";

$stmt->close();
$conn->close();

