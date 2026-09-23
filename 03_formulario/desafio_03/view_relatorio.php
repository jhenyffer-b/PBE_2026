<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 03</title>
</head>
<body>
    <h1>Dados Voo ✈️</h1>
    <p><b>Cliente:</b> <?= $dados_cliente ?> </p>
    <table border="1">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Telefone</th>
                <th>CPF</th>
                <th>Destino</th>
                <th>Horário Embarque</th>
                <th>Passagem</th>
                <th>Tipo Voo</th>
                <th>Valor Passagem</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($passagens as $passagem): ?>
                <tr>
                    <td><?= $passagem['nome_cliente']?></td>
                    <td><?= $passagem['telefone_cliente']?></td>
                    <td><?= $passagem['cpf_cliente']?></td>
                    
                    
                    
                </tr>
                <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>







