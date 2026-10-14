<?php
        class Pedido{

        private $cliente;
        private $valorItens;  

            public function __construct($cliente, $valorItens = 0) {
            $this->cliente = $cliente;
            $this->valorItens = $valorItens;
        }
            
            public function adicionarItem($valor){
                $this->valorItens += $valor;
            
        }

            public function getTotal(){
                return $this->valorItens;
        }

          public function exibirPedido(){
            echo "Cliente: $this->cliente - Total dos itens: R$ $this->valorItens<br>"; 
    }
}

        class NotaFiscal{
            private  $totalPedido;
            private  $imposto;
            private  $totalPagar;

            public function __construct( $totalPedido, $imposto = 10) {
            $this->totalPedido = $totalPedido;
            $this->imposto = $imposto;
            $this->totalPagar = 0;
        }

        public function calcularTotal(){
            $this->totalPagar = $this->totalPedido + ($this->totalPedido * ($this->imposto / 100));
        }

        public function exibirNota(){
    
        echo "Subtotal: R$ $this->totalPedido <br>";
        echo "Imposto Aplicado:$this->imposto % <br>";
        echo "Total a Pagar: R$ $this->totalPagar <br>";
        
    }
}
   
$pedido = new Pedido("Jhenyffer", 10);

$pedido->adicionarItem(150);
$pedido->adicionarItem(80);
echo $pedido->exibirPedido();


$notaFiscal = new NotaFiscal($pedido->getTotal(), 8);
$notaFiscal->calcularTotal();
$notaFiscal->exibirNota();

    
    
?>
