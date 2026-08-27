<?php
function calcularPedido($nome, $preco, $qtd, $porcentualdesconto, $porcentualimposto){
    $subtotal = ($preco * $qtd);
    $valordesconto = ($subtotal * $porcentualdesconto / 100);
    $valorimposto = ($subtotal - $valordesconto) * ($porcentualimposto / 100);
    $totalfinal = ($subtotal - $valordesconto) + $valorimposto;

return [
    "nomeProduto" => $nome,
    "subtotal" => $subtotal,
    "valordesconto" => $valordesconto,
    "valorimposto" => $valorimposto,
    "totalFinal" => $totalfinal
];
}
function calculoFrete($valorTotal){
    $frete = $valorTotal *(10/100);
    $totalFrete = $frete + $valorTotal;
return $totalFrete;
}

?>