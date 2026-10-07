<?php

class Pedido {

    public $numero;
    public $cliente;
    public $valor;
    public $status;

    function adicionarItem($valor) {
        if($this->status == "Aguardando"){
            $this->valor = $this->valor + $valor;
        }else{
            echo "Não foi possível adicionar itens 
            o pedido está $this->status <br>";
        }
        
    }

    function cancelar() {
        $this->status = "Cancelado";
        echo "Status alterado para $this->status <br>";
    }

    function finalizar() {
        $this->status = "Finalizado";
        echo "Status alterado para $this->status <br>";
    }

    function exibirResumo() {
    }
}

$pedido1 = new Pedido();

$pedido1->numero = 5;
$pedido1->cliente = "Jhenyffer";
$pedido1->valor = 350;
$pedido1->status = "Aguardando";

$pedido1->adicionarItem(20);
$pedido1->finalizar();

echo "Número: " . $pedido1->numero . "<br>";
echo "Cliente: " . $pedido1->cliente . "<br>";
echo "Valor: R$ " . $pedido1->valor . "<br>";
echo "Status: " . $pedido1->status . "<br><br>";


$pedido2 = new Pedido();

$pedido2->numero = 3;
$pedido2->cliente = "Matheus";
$pedido2->valor = 100;
$pedido2->status = "Aguardando";

$pedido2->adicionarItem(30);
$pedido2->cancelar();

echo "Número: " . $pedido2->numero . "<br>";
echo "Cliente: " . $pedido2->cliente . "<br>";
echo "Valor: R$ " . $pedido2->valor . "<br>";
echo "Status: " . $pedido2->status . "<br>";

?>
