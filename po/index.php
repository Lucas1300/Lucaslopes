<?php 

require_once("config.php");

$sql = new sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

var_dump($usuarios);



?>