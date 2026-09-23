<?php
$dados_cliente = $_POST['dados_cliente'];
$nome_produto01 = $_POST['nome_produto01'];
$preco_01= $_POST['preco_01'];
$qtd_01= $_POST['qtd_01'];

$nome_produto02 = $_POST['nome_produto02'];
$preco_02= $_POST['preco_02'];
$qtd_02= $_POST['qtd_02'];

$nome_produto03 = $_POST['nome_produto03'];
$preco_03= $_POST['preco_03'];
$qtd_03= $_POST['qtd_03'];
$total = 0;

$produtos = [
    ["nome" => $nome_produto01, "preco" => $preco_01, "quantidade" => $qtd_01, 'subtotal' => $preco_01 * $qtd_01 ],
    ["nome" => $nome_produto02, "preco" => $preco_02, "quantidade" => $qtd_02, 'subtotal' => $preco_02 * $qtd_02 ],
    ["nome" => $nome_produto03, "preco" => $preco_03, "quantidade" => $qtd_03,'subtotal'=> $preco_03 * $qtd_03 ] 
];
foreach($produtos as $produto){
  $total += $produto['subtotal'];
  
}
$desconto = 0;

if($total > 500){
    $desconto = 10;
}
$valorDesconto = $total * ($desconto/100);

$total = $total - $desconto;

require_once 'view_relatorio.php';
?>