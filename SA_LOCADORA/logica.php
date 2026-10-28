<?php
$nome_cliente = $_POST['nome_cliente'];
$email_cliente = $_POST['email_cliente'];
$data_locacao = $_POST['data_locacao'];
$qtd_dias= $_POST['qtd_dias'];
$categoria = $_POST['categoria'];
$seguro_total = $_POST['seguro_total'];
$gps = $_POST['gps'];
$cadeirinha_infantil= $_POST['cadeirinha_infantil'];

if($categoria == "Econômico"){
    $ValorDiaria  = 100;
}
elseif($categoria == "Intermediário"){
    $ValorDiaria = 150;
}else{
    $ValorDiaria = 250;
}
function calcularSubtotal($valorDiaria, $qtd_dias){
    $subtotal = $valorDiaria * $qtd_dias;
    return $subtotal;
}
function calcularPercentualDesconto($qtd_dias){
    if($qtd_dias >= 15){
        return 20;
    }
    elseif($qtd_dias >= 7){
        return 10;
    }else{
        return 0;
    }
}
$diariaAdicionais = 0;
if($seguro_total == "Sim"){
    $diariaAdicionais = $diariaAdicionais + 15;
}
if($cadeirinha_infantil == "Sim"){
    $diariaAdicionais = $diariaAdicionais + 20;
}
$subtotalVeiculo = calcularSubtotal($valorDiaria, $qtd_dias){
    $subtotalAdicionais = calcularSubtotal($diariaAdicionais, $qtd_dias){
        $total = $subtotalVeiculo + $subtotalAdicionais
    }
}
$percentualDesconto = calcularPercentualDesconto($qtd_dias){
    $percentualDesconto = 0;
    $desconto = $total * $percentualDesconto / 100; 
}
$totalPagar = $total - $desconto;   
require_once "view_relatorio.php";

?>




