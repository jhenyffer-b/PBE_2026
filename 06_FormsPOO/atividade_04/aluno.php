<?php
class Aluno{
    private $nome;
    private $peso;
    private $altura;
    
     public function __construct($nome, $peso, $altura){
        $this->nome = $nome;
        $this->peso = $peso;
        $this->altura = $altura;
    }

     public function getNome(){
        return $this->nome;
    }
    
    public function calcularIMC() {
        if ($this->altura <= 0) {
            return 0;
        }
        return $this->peso / ($this->altura * $this->altura);
    }

    public function classificarIMC() {
        $imc = $this->calcularIMC();

        if ($imc <= 18.5) {
            return "Abaixo do peso, cuide da sua saúde!";
        } elseif ($imc <= 25) {
            return "Peso normal, continue assim!";
        } elseif ($imc <= 30) {
            return "Sobrepeso, cuide da sua saúde!";
        } elseif ($imc >= 35) {
            return "Obesidade, cuide da sua saúde!";
        } else {
            return "Você precisa cuidar da sua saúde urgentemente!";
        }
    }
}


?>
