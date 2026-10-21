<?php
//Arquivo index.php
require_once "Turma.php";

//criando o professor
$professor = new Professor("Leonardo Evangelista", "leonardo@email.com", "Programação");

//criando uma turma
$turma = new Turma("TI", $professor); //envinado o obejto professor, no caso o Leonardo

//criando alunos
$aluno = new Aluno("Jhenyffer Blois", 'jhenyffer@email.com', "B456");
$aluno->adicionarNota(8.75);
$aluno->adicionarNota(9);
$aluno->adicionarNota(10);

$aluno2 = new Aluno("Matheus Fabretti", 'matheus@email.com', "D654");
$aluno2->adicionarNota(9.25);
$aluno2->adicionarNota(8.75);
$aluno2->adicionarNota(10);

$aluno3 = new Aluno("Manuela Buriti", 'manuela@email.com', "E546");
$aluno3->adicionarNota(10);
$aluno3->adicionarNota(9);
$aluno3->adicionarNota(8.95);

//adiconar alunos a turma criada
$turma->adicionarAluno($aluno);
$turma->adicionarAluno($aluno2);
$turma->adicionarAluno($aluno3);


//exibindo resumo da turma
$turma->exibirDadosTurma();
//exibindo lista de alunos
$turma->listarAlunos();

echo "<h4> Polimorfismo </h4>";
//mostrando o polimorfismo funcionando
$pessoas = [$professor, $aluno, $aluno2];
foreach($pessoas as $pessoa){
    $pessoa->exibirDadosPessoa();
    echo "<hr>";
}