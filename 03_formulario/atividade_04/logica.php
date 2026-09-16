<?php
$nome_aluno = $_POST['nome_aluno'];
$nota01 = $_POST['nota01'];
$nota02 = $_POST['nota02'];
$nota03 = $_POST['nota03'];

$media = ($nota01 + $nota02 + $nota03) / 3;
if($media > 10){
    $media = 10;
}
require_once "view_relatorio.php";
?>