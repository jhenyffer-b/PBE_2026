<?php

function verificarmaioridade($idade){
    if ($idade >= 18){
        return "maior de idade";
    }else{
        return "menor de idade";

    }
 }
$idade1 = 10;
$idade2 = 15;
$idade3 = 20;
 
 $resultado1 = verificarmaioridade($idade1);
 echo "A idade $idade1 é $resultado1 <br>";

 $resultado2 = verificarmaioridade($idade2);
 echo "A idade $idade2 é $resultado2 <br>";

 $resultado3 = verificarmaioridade($idade3);
 echo "A idade $idade3 é $resultado3 <br>";



    
   
?>