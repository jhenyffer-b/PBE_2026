<?php

$pessoa_idade = 17;
$acompanhada = true;

if ($pessoa_idade >= 18){
    echo "Pode entrar sozinha!🥳";

}
elseif ($pessoa_idade >= 14 && $pessoa_idade <= 17 && $acompanhada == true){
    echo "Entrada liberada com acompanhante✅";
}
else{
    echo "Menores de 14 não podem entrar, mesmo acompanhados😢";
}

?>
