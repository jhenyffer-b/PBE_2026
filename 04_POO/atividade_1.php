<?php
class Celular{

    public $marca;
    public $modelo;
    public $cor;
    public $bateria;
    public $ligado;

    function ligar(){
        $this->ligado = true;
        echo "O celular foi ligado .<br>";
    }
    function desligar(){
        $this->ligado = false;
        echo "O celular está desligado .<br>";
    }
    function usar($consumir){
        $this->bateria = $this->bateria - $consumir;
        if($this->bateria < 0){
            $this->bateria = 0;
        }
        echo "A bateria foi consumida em $consumir <br>";
        echo "Sobrando um total de $this->bateria <br>";
    }
    function carregar($carga){
        $this->bateria = $this->bateria + $carga;
        if($this->bateria > 100){
            $this->bateria= 100;
        }
        echo "A bateria foi carregada em $carga <br>";
        echo "Aumentando a bateria para $this->bateria <br>";
    }

 
}
$celular1 = new Celular();
 
$celular1->marca = "Iphone";
$celular1->modelo = 12;
$celular1->cor = "Roxo";
$celular1->bateria = 100;
$celular1->ligado= true;

echo "Marca: " . $celular1->marca . "<br>";
echo "Modelo: " . $celular1->modelo . "<br>";
echo "Cor: " . $celular1->cor . "<br>";
echo "Bateria: " . $celular1->bateria . "<br>";
echo "Ligado: " . $celular1->ligado . "<br>";

$celular1->carregar(33);
$celular1->carregar(24);
$celular1->usar(20);
$celular1->desligar();



$celular2 = new Celular();
 
$celular2->marca = "Iphone";
$celular2->modelo = 18;
$celular2->cor = "Marçala";
$celular2->bateria = 40;
$celular2->ligado= false;

echo "Marca: " . $celular2->marca . "<br>";
echo "Modelo: " . $celular2->modelo . "<br>";
echo "Cor: " . $celular2->cor . "<br>";
echo "Bateria: " . $celular2->bateria . "<br>";
echo "Ligado: " . $celular2->ligado . "<br>";

$celular2->carregar(50);
$celular2->carregar(20);
$celular2->usar(10);
$celular2->desligar();