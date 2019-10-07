<?php

class Produto {
    private $descricao;
    private $preco;
    
        public function getDetalhes(){
            return "O produto {$this->descricao} custa {$this->preco} reais";
        }
    
    //public pode ser acessado de fora da classe ou qualquer lugar
    //private só pode ser acessado dentro da classe por ser privado
    //protected só pode acessado dentro da classe ou em classes que enderam da classe principal, protegido

    public function setDetalhes(){
        return "O produto {$this->descricao} custa  {$this->preco} reais";
}
        public function setDescricao($valor){
            $this->descricao = $valor;
        }
    public function setPreco($valor){
            $this->preco = $valor;
        }    
    public function getDescricao(){
            return $this->descricao;
            
        }
    public function getPreco(){
            return $this->preco;

        }
    }



$p1 = new Produto;
$p1->setDescricao('Livro');
$p1->setPreco(50);

//var_dump($p1);
echo $p1->getDetalhes();
