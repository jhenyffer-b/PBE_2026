<?php
$frequencia = 75;
$nota = 10;

echo "Jhenyffer -";
if ($frequencia < 75){
    echo "Reprovado por falta, independente da nota <br>";
}
elseif ($nota >= 9){
    echo "Aprovado <br>";
}
elseif ($nota >= 5 && $nota <= 6.9){
    echo "Recuperação <br>";
}
else{
    echo "Reprovado <br>";

}

$frequencia2 = 90;
$nota2 = 7;

echo "Isabela -";
if ($frequencia < 75){
    echo "Reprovado por falta, independente da nota <br>";
}
elseif ($nota >= 9){
    echo "Aprovado <br>";
}
elseif ($nota >= 5 && $nota <= 6.9){
    echo "Recuperação <br>";
}
else{
    echo "Reprovado <br>";
}

$frequencia3 = 100;
$nota2 = 10;

echo "Manuela -";
if ($frequencia < 75){
    echo "Reprovado por falta, independente da nota <br>";
}
elseif ($nota >= 9){
    echo "Aprovado <br>";
}
elseif ($nota >= 5 && $nota <= 6.9){
    echo "Recuperação <br>";
}
else{
    echo "Reprovado <br>";
}
?>