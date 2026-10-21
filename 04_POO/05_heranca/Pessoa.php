<?php
// Arquivo Pessoa.php
class Pessoa{
    protected $nome;
    protected $email;

    public function __construct($nome, $email){
        $this->nome = $nome;
        $this->email = $email;
    }
    //método que BUSCA e RETORNA o nome do objeto
    public function getNome(){
        return $this->nome;
    }
    //método que ATUALIZA o NOME
    public function setNome($nome){
        $this->nome = $nome;
    }
    //método que BUSCA e RETORNA o email do objeto
    public function getEmail(){
        return $this->email;
    }
    //método que ATUALIZA o EMAIL
    public function setEmail($email){
        $this->email = $email;
    }
    //método para EXIBIR todos os dados, normalmente chmado de toString()
    public function exibirDadosPessoa(){
        echo "Nome: $this->nome <br> Email: $this->email <br>";
    }
}