<?php 

function trataNome($nome){

        if($nome){

            throw new Exception ("Nenhum nome foi informado.",1);
        }
        echo ucfirst($name)."<br>";

}
try{
    trataNome("Lucas");
    trataNome("");


} catch(Exception $e){

    echo $e->getMessage();

} finally {

    echo "Executou o Try";
}





?>