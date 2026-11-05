<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boletim Escolar</title>
</head>
<body>
     <h2>✎ᝰ Sistema de Boletim Escolar</h2>
    <p><b>Nome:</b> <?= $aluno->getNome() ?></p>
    <p><b>Turma:</b> <?= $aluno->getTurma() ?></p>

    <table border="1">
        <thead>
            <tr>
                <th>Nota 1</th>
                <th>Nota 2</th>
                <th>Nota 3</th>
                <th>Média</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $aluno->getNota1() ?></td>
                <td><?= $aluno->getNota2() ?></td>
                <td><?= $aluno->getNota3() ?></td>
                <td><?= $aluno->calcularMedia() ?></td>
            </tr>
        </tbody>
    </table>

    <p><b>Faltas:</b> <?= $aluno->getFaltas() ?></p>
    <p><b>Frequência:</b> <?= $aluno->calcularFrequencia() ?>%</p>

    <h3>Situação: <?= $aluno->verificarSituacao() ?></h3>

    <?php if ($aluno->verificarSituacao() == "Aprovado"): ?>
        <p>Parabéns, continue assim!</p>
    <?php else: ?>
        <p>⚠️ Atenção: Procure o professor para saber os próximos passos.</p>
    <?php endif; ?>
</body>
</html>