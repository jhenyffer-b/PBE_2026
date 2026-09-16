<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 06</title>
</head>
<body>
    <h1>Compra de Ingressos</h1>
    <p><b>Nome:</b> <?= $nome?> </p>
    <p><b>Nome Filme:</b> <?= $nomeFilme ?> </p>
    <p><b>Quantidade Ingressos:</b> <?= $qtd_ingresso ?> </p>
    <p><b>Valor Total:</b> <?= $total ?> </p>

   <?php if($qtd_ingresso >=10): ?>
        <h3>Parabéns você ganhou 10% de desconto!</h3>
    <?php endif ?>
    
 </body>
 </html>
    
    