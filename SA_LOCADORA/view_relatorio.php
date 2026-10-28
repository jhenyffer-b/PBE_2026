<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Contrato de Locação</title>
</head>
<body>

    <h1>Contrato de Locação</h1>
        <p><b>Cliente:</b> <?php echo $nome_cliente; ?></p>
        <p><b>E-mail:</b> <?php echo $email_cliente; ?></p>
        <p><b>Retirada:</b> <?php echo $data_locacao_formatada; ?></p>
        <p><b>Devolução:</b> <?php echo $data_devolucao; ?></p>

             <h3>Adicionais</h3>
            <p>Seguro total: <?php echo $seguro_total; ?></p>
            <p>GPS: <?php echo $gps; ?></p>

            <p>Cadeirinha infantil: <?php echo $cadeirinha_infantil; ?></p>

    <table border="1">
        <tr>
            <th>Item</th>
            <th>Diária</th>
            <th>Dias</th>
            <th>Subtotal</th>
        </tr>

        <tr>
            <td>Veículo <?php echo $categoria; ?></td>
            <td>R$ <?php echo number_format($valorDiaria, 2, ",", "."); ?></td>
            <td><?php echo $qtd_dias; ?></td>
            <td>R$ <?php echo number_format($subtotalVeiculo, 2, ",", "."); ?></td>
        </tr>

    

    </body>
    </html>
