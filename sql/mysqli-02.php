<?php


    $conn = new mysqli("localhost", "root", "K#tfh935", "dbphp7");


if($conn->connect_error){
    echo "Error: ".$conn->connect_error;

}

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

while ($row = $result->fetch_assoc()) {
    //retornar dado se existir

    array_push($data, $row);

}
echo json_encode($data);
?>