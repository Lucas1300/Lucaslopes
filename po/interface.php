<?php 

interface Veiculo {

    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);


}

class Civic implements Veiculo {
    
        public function acelerar($velocidade)
        {

            echo "O veiculo acelerou até" . Velocidade . "km/h";
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
$carro = new Civic ();

$carro->trocarMarcha(1);

?>