<?php 

try {
 
    throw new Exception("Houve um erro.",400);


} catch (Exception $e){
//o que voce quer capturar

    echo json_encode(array(
        "message"=>$e->getMessage(),
        "line"=>$e->getLine(),
        "file"=>$e->getFile(),
         "code"=>$e->getCode(),


    ));
}






?>





//try tentar
//catch captura se deu algum erro no tray 