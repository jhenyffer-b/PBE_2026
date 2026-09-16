<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atrividade 04</title>
</head>
<body>
    <h1>Resultado do Aluno</h1>
    <p><b>Nome:</b> <?= $nome_aluno ?> </p>
    <p><b>Nota 01:</b> <?= $nota01 ?> </p>
    <p><b>Nota 02:</b> <?= $nota02 ?> </p>
    <p><b>Nota 03:</b> <?= $nota03 ?> </p>
    <p><b>Média:</b> <?= $media ?> </p>

    <?php if($media >= 7): ?>
        <p>Aprovado!</p>
    <?php else: ?>
        <p>Reprovado!</p>
    <?php endif ?>

    <?php if($media == 10): ?>
        <p>Você atingiu a nota máxima</p>
    <?php endif ?>
 </body>
 </html>
    
    