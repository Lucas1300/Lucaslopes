<?php
/*
$anoNascimento = 1994;

$nomeCompleto = "Lucas Lopes da Silva";
*/
$nome1 = "Pedro";

$sobrenome = "Lopes";

$nomeCompleto = $nome1 ." ". $sobrenome;

echo $nomeCompleto;

exit;

echo $nome1;

echo "<br/>";

//unset($nome1);
unset($nome1);
//unset destruir a variavel

if (isset($nome1)){
//isset saber se ela existe

echo $nome1;

}
?>