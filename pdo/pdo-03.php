<?php 

$conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","K#tfh935");

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuarios = :ID");

$login = "Lopes";
$password = "7890";
$id = 8;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Alterado OK!";