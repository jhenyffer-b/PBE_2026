<?php
$nome = $_POST['nome'];
$pesoKg = $_POST['pesoKg'];
$altura = $_POST['altura'];

$altura = $altura * 100;
$valorImc = $pesoKg / ($altura * $altura);

require_once "view_relatorio.php";
?>