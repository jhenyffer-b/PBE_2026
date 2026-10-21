<?php
// Arquivo Professor.php
require_once "Pessoa.php";
class Professor extends Pessoa{
    private $disciplina;

    public function __construct($nome, $email, $disciplina){
        $this->disciplina = $disciplina;
        parent::__construct($nome, $email); //executa o construtor da classe Pessoa, passando seus atributos
    }
    //método para BUSCAR a disciplina
    public function getDisciplina(){
        return $this->disciplina;
    }
    //exibir todos os dados do professor
    public function exibirDadosProfessor(){
        parent::exibirDadosPessoa();
        echo "Disciplina: $this->disciplina <br><hr>";
    }
}
