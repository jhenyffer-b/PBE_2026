<?php
$notas_alunos = [
    "Ana" => 8.5,
    "Bruno" => 7,
    "Carlos" => 9.2,
    "Diana" => 6.8,
    "Eduardo" => 8,
    "Roberto" => 7

];
$media = 0;

foreach ($notas_alunos as $nome => $nota){
    echo "O aluno: $nome, tirou a nota: $nota <br>";
    $media += $nota;
}
$media = $media / 6;
echo "A média da turma é: $media";
?>
