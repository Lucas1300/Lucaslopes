<?php 

$conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","K#tfh935");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)");

$login = "Lucas";
$password = "123456789";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();

echo "Inserido OK!";






?>