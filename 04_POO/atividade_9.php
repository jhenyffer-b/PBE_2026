<?php
class Produto{
    private $nome;
    private $preco;
    private $estoque;

    public function __construct($nome, $preco, $estoque){
        $this->nome = $nome;
        $this->preco = $preco;
        $this->estoque = $estoque;
    }
    public function vender($quantidade){
        if($quantidade <= $this->estoque){
            $this->estoque -= $quantidade;
            echo"Compra realizada com sucesso! <br>";
        }else{
            echo "Estoque insuficiente! <br>";
        }
    }
    
    public function reajustarPreco($percentual){
             $this->preco += $this->preco *($percentual/100);
    }

    public function exibirInfo(){
             $precoFormatado = number_format($this->preco, 2, ',', '.');
             echo "Nome: $this->nome, Preço: R$ $precoFormatado, Estoque: $this->estoque <br>";
    }
 }
 $produto = new Produto("Perfume Good Girl Blush", 570, 10);
 $produto->vender(4);
 $produto->reajustarPreco(10);
 $produto->exibirInfo();