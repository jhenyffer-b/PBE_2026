<?php
class Filme{
    
    private $titulo;
    private $genero;
    private $duracao;
    private $assistido;

    public function __construct($titulo, $genero, $duracao){
        $this->titulo = $titulo;
        $this->genero = $genero;
        $this->duracao = $duracao;
        $this->assistido = false;
    }
    public function marcarComoAssistido(){
        $this->assistido = "Sim";
    }
    public function exibirInformacoes(){
        echo "Titulo: $this->titulo <br>";
        echo "Gênero: $this->genero <br>";
        echo "Duração: $this->duracao min<br>";
        echo "Assistido: $this->assistido <br>";
    }
    public function foiAssistido(){
        if($this->assistido == false){
            echo "O filme não foi assistido";
        }else{
            echo "Você já assistiu";
        }
    }
}
$filme1 = new Filme("Crepúsculo", "Romace", 145, "Sim");
$filme1->marcarComoAssistido(true);
$carro1->frear(10);
echo $carro1->verVelocidade () . "km"