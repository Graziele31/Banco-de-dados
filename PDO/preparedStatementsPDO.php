<?php
$servername = "localhost";
$username = "root";
$password = "senac";
$dbname = "myDBPDO";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

$stmt = $conn->prepare("INSERT INTO myguests (firstname, lastname, email)
  VALUES (:firstname, :lastname, :email)");
$stmt->bindParam(':firstname', $firstname);
$stmt->bindParam(':lastname', $lastname);
$stmt->bindParam(':email', $email);


$firstname = ($_POST["firstname"]);
$lastname = ($_POST["lastname"]);
$email = ($_POST["email"]);
$stmt->execute();

echo "Novo cadastro realizado com sucesso!";

$conn = null;

