<?php

class Aula{
    public $disciplina;
    public $professor;
    public $duracao;
    public $numero_sala;
    public $bloco;

     function exibirInformacoes(){
        echo "Disciplina: " . $this->disciplina . "<br>";
        echo "Professor: " . $this->professor . "<br>";
        echo "Duração: " . $this->duracao . "<br>";
        echo "Número da sala: " . $this->numero_sala . "<br>";
        echo "Bloco: " . $this->bloco . "<br>";
    }

    
     function trocarProfessor($novoProfessor){
        $this->professor = $novoProfessor; 
        echo "O novo professor é $this->professor <br>";
} 
     function alterarLocal($n_sala, $bloco){
        $this->numero_sala = $n_sala;
        $this->bloco = $bloco;

        echo"O novo local é $this->bloco $this->numero_sala <br>";
    }
}


$aula1 = new Aula();

$aula1->disciplina = "HTML";
$aula1->professor = "Gabriel";
$aula1->duracao = "4hrs";
$aula1->numero_sala = 10;
$aula1->bloco = "A";

$aula1->exibirInformacoes();
echo "<hr>";
$aula1->trocarProfessor("Leonardo");
echo "<hr>";
$aula1->alterarLocal("B", "14");
echo "<hr>";
$aula1->exibirInformacoes();


