<?php 

interface Veiculo {

    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);


}

abstract class Automovel implements Veiculo {
    
        public function acelerar($velocidade)
        {

            echo "O veiculo acelerou até" . $velocidade . "km/h";
        }

        public function frenar($velocidade)
{
        echo "O veículo frenou até " . $velocidade . " km/h";
    }
        public function trocarMarcha($marcha)
       {
           echo "O Veículo engatou a marcha" . $marcha;
       } 
}

class DelRey extends Automovel {

    public function empurrar(){

    }
}

$carro = new DelRey();

$carro->acelerar(200);

?>

//abstract só vai abstrar de um classe
//interface só declara o que você precisa colocar
na sua classe.