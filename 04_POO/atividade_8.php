<?php

class ContaBancaria{

    private $nome;
    private $salario;

    public function __construct($nome, $salario = "Desconhecido"){
        $this->nome = $nome;
        $this->salario = $salario;
    }
    public function aumentarSalario($percentual){
        if($percentual > 0 && $percentual <=10){
            $this->salario += $this->salario *($percentual/100);
            return true;
        }else{
            echo"O percentual deve ser maior que 0 e menor ou igual a 10 <br>";
            return false;
        }
    }
    public function exibirSalario(){
        $salarioFormatado = number_format($this->salario, 2, ',', '.');
        echo "Nome: $this->nome - Salário: R$ $salarioFormatado <br>";
    }
}
$function = new ContaBancaria("Jhenyffer", 2000);
$function->aumentarSalario(10);
$function->exibirSalario();
