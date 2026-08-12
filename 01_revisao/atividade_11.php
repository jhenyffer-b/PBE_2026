<?php
$numeros = [1,23,31,44,56,60,17,28,9,10];
$numero_Maior = -9999999;

foreach ($numeros as $numero){
    if ($numero > $numero_Maior){
    $numero_Maior = $numero;
    }
}
echo "O número maior é: $numero_Maior";
?>