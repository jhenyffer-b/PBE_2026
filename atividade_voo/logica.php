
<?php

// Verifica se o formulário foi enviado pelo método POST.
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.php");
    exit;
}

// Recebe os dados pessoais do cliente.
$nome_cliente = trim($_POST["nome_cliente"] ?? "");
$telefone_cliente = trim($_POST["telefone_cliente"] ?? "");
$cpf_cliente = trim($_POST["cpf_cliente"] ?? "");

// Recebe os dados da viagem.
$origem = trim($_POST["origem"] ?? "");
$destino = trim($_POST["destino"] ?? "");
$data_embarque = trim($_POST["data_embarque"] ?? "");
$horario_embarque = trim($_POST["horario_embarque"] ?? "");

// Recebe as informações da passagem.
$passagem = trim($_POST["passagem"] ?? "");
$tipo_voo = trim($_POST["tipo_voo"] ?? "");
$tipo = trim($_POST["tipo"] ?? "");

// Verifica se os campos obrigatórios foram preenchidos.
if (
    $nome_cliente === "" ||
    $telefone_cliente === "" ||
    $cpf_cliente === "" ||
    $origem === "" ||
    $destino === "" ||
    $data_embarque === "" ||
    $horario_embarque === "" ||
    $passagem === "" ||
    $tipo_voo === "" ||
    $tipo === ""
) {
    exit("Erro: preencha todos os campos obrigatórios.");
}

// Encaminha os dados para a página do relatório.
    require_once "view_relatorio.php";

?>
