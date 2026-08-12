<?php
$idades = [10,12,14,16,18,20,22,24];
$soma = 0;
$qtd = 0;

foreach ($idades as $idade){
    $soma += $idade;

    if ($idade >= 18){
        $qtd+=1;
    }
}
$media = $soma /count($idades);
echo "A media das idades é: $media <br>";
echo "A quantidade de pessoas maiores de idade é: $qtd <br>";
    
?>
