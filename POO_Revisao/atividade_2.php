<?php

class Carro{
    private $modelo;
    private $velocidade;

    public function __construct($modelo){
        $this->modelo = $modelo;
        $this->velocidade = 0;
    }
    public function acelerar($aumenta){
       return $this->velocidade += $aumenta;
    }
    public function frear($diminui){
        return $this->velocidade -= $diminui;
    }
    public function verVelocidade(){
        return $this->velocidade;
    }

}

$carro1 = new Carro("Honda Civic", 100);
$carro1->acelerar(30);
$carro1->frear(10);
echo $carro1->verVelocidade () . "km"


?>