<?php
// Aquivo Aluno.php
require_once "Pessoa.php";
class Aluno extends Pessoa{
    private $matricula;
    private $notas = []; //NOTAS é um array(listas)
    //lista de notas já irá iniciar vazia

    public function __construct($nome, $email, $matricula){
        parent::__construct($nome, $email); //construtor da classe Pessoa
        $this->matricula = $matricula;
    }
    public function adicionarNota($nota){ //adicona a nota(numero) a lista de notas
        $this->notas[] = $nota;
    }
    public function calcularMedia (){
        //verifica a quantidade de notas. Se for 0, já para a execução,e sai do método não fazendo a conta
        if(count($this->notas)== 0) return 0; //count = PEGA A QUANTIDADE DE ITENS DA LISTA
        //só vai ser calculado se tiver notas >(maior) que 0
        return array_sum($this->notas) / count($this->notas);  //array_sum = SOMA TODOS OS ITENS DA LISTA DE NOTAS
    }
    public function verificarSituacao(){
        return $this->calcularMedia() >=7 ? "Aprovado" : "Reprovado";
        /* 
            $media = $this->calcularMedia();
            if($media >=7){
             return "Aprovado";
            }else{
                return "Reprovado";
             }
        */
    }
    public function exibirDadosAluno(){
        parent::exibirDadosPessoa();
        echo "Matricula: $this->matricula <br>";
        echo "Media: ".number_format($this->calcularMedia(), 2) . "<br>"; // ",2" para pular duas casas decimais
        echo "Situação: ".$this->verificarSituacao() . "<br><hr>";
    }
}