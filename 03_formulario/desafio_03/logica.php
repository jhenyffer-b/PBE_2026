<?php
$nome_cliente = $_POST['nome_cliente'];
$telefone_cliente = $_POST['telefone_cliente'];
$cpf_cliente= $_POST['cpf_cliente'];
$destino= $_POST['destino'];
$horario_embarque= $_POST['horario_embarque'];
$passagem = $_POST['passagem'];
$tipo_voo = $_POST['tipo_voo'];
$tipo = $_POST['tipo'];

require_once "view_relatorio.php";
?>