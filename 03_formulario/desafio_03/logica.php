<?php
//Dados do Cliente
$nome_cliente = $_POST['nome_cliente'];
$telefone_cliente = $_POST['telefone_cliente'];
$cpf_cliente= $_POST['cpf_cliente'];
//Dados do Embarque
$destino = $_POST['destino'];
$horario_embarque = $_POST['horario_embarque'];
//Dados Passagem
$passagem = $_POST['passagem'];
//Dados Voo
$tipo_voo = $_POST['tipo_voo'];
//Tipo Voo
$tipo = $_POST['tipo'];



$passagens = [
    ['nome' => $nome_cliente, 'telefone' => $telefone_cliente, 'cpf' => $cpf_cliente, 'destino' => $destino, 'horario' => $horario_embarque, 'passagem' => $passagem, 'voo' => $tipo_voo, 'tipo' => $tipo] 
];  

require_once 'view_relatorio.php';
?>