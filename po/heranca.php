<?php

abstract Class Conta{
    protected $agencia;
    protected $conta;
    protected $saldo;

    public function __construct($agencia, $conta, $saldo){
        $this->agencia = $agencia;
        $this->conta = $conta;
        $this->saldo = $saldo;
    }
    
    public function getDetalhes(){
        return "Agencia: {$this->agencia}<br>  Conta: {$this->conta}<br>  Saldo: {$this->saldo}<br>";


    }

    public function depositar($valor){
        $this->saldo += $valor;
        echo "Deposito de: {$valor} | Saldo atual: {$this->saldo}<br>";
    }
}

class Corrente extends Conta{
    protected $limite;

    public function __construct($agencia, $conta, $saldo, $limite){
       parent:: __construct($agencia, $conta, $saldo);
        $this->limite = $limite;
        
    }
    
    public function saque($valor){
        if(($this->saldo = $this->limite) >=$valor):
            $this->saldo -= $valor;
            echo "Saque de: {$valor} | Saldo atual: {$this->saldo}<b>";
        else:
            echo "Saque não autorizado | Saldo atual: {$this->saldo} | Limite: {$this->limite}<b>";
        endif;    



    }
}

$c1 = new corrente(100, 2586, 5000, 500);
$c1->depositar(18000);
$c1->saque(2500);
$c1->saque(500);
echo $c1->getDetalhes();



    ?>

    //Herança é um princípio de orientação a objetos, que permite que classes compartilhem 
    atributos e métodos, através de "heranças". Ela é usada na intenção de reaproveitar 
    código ou comportamento generalizado ou especializar operações
     ou atributos.

     //abstract não pode ter classes
     instaciadas apartir dela

     //final significa que eu nao posso criar nada apartir dela
     por essa com esse final, só posso criar classes atraves do abstract

     //abstract e final, quer dizer que é só estrutural ou final que 
     não pode passar as suas caracteristicas adiantes

     //public final - não pode ser mudado

    //abstract forma as outras classes a teram o mesmo parametro, obrigatorio serem iguais.