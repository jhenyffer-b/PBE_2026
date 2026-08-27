<?php
require_once 'funcao.php';

$resultado = calcularPedido('teclado',100.00,2,10,5);
echo "Nome Produto: " . $resultado['nomeProduto'] . "<br>";
echo "Subtotal: " . $resultado['subtotal'] . "<br>";
echo "Desconto: " . $resultado['valordesconto'] . "<br>";
echo "Imposto: " . $resultado['valorimposto'] . "<br>";
echo "Total Final: " . $resultado['totalFinal'] . "<br>";


?>