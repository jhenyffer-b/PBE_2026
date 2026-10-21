<?php
class Imc{
    
    private $nome;
    private $idade;
    private $peso;
    private $altura;

    public function __construct($nome, $idade, $peso, $altura){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->peso = $peso;
        $this->altura = $altura;
    }
    public function calcularImc(){
       return $this->peso / ($this->altura ** 2); // "**2" elevar ao quadrado 
    }
    public function classificarImc(){
         $imc = $this->calcularImc();
         if ($imc > 18.5){
            return "Abaixo do peso";
         }elseif ($imc >= 18.5 && $imc < 25 ){
            return "Peso normal";
         }elseif ($imc <= 25 && $imc < 29.9){
            return "Sobrepeso";
         }else{
            return "Obesidade";
         }
    }
        public function exibirFicha(){
            echo "Paciente: $this->nome <br>";
            echo "Idade: $this->idade <br>";
            echo "Imc: " . number_format($this->calcularImc(), 2) . "<br>";
            echo "Classificação: " . $this->classificarImc() . "<br>";
         }
     }
$paciente = new Imc("Jhenyffer", 16, 58, 1.62);
$paciente->exibirFicha();