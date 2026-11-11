<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Contrato de Matrícula 🏋️‍♀️🔥</title>
</head>
<body>

    <h1>Contrato de Matrícula 🏋️‍♀️🔥</h1>
    
    <p><strong>Aluno:</strong> <?= $matricula->getAluno()->getNome() ?></p>
    <p><strong>IMC:</strong> <?= number_format($matricula->getAluno()->calcularIMC(), 1) ?></p>
    <p><strong>Classificação:</strong> <?= $matricula->getAluno()->classificarIMC() ?></p>


    <h3>Detalhamento da Mensalidade</h3>
    <table border="1">
        <tr>
            <th>Item</th>
            <th>Valor</th>
        </tr>

        <tr>
            <td>Plano: <?= $matricula->getPlano(); ?></td>
            <td>R$ <?= $matricula->calcularValorPlano(); ?></td>
        </tr>

        <?php foreach ($matricula->getModalidades() as $modalidade) { ?>
            <tr>
                <td>Modalidade: <?= $modalidade; ?></td>
                <td>R$ <?= $matricula->calcularValorModalidade($modalidade); ?></td>
            </tr>
        <?php } ?>

        <tr>
            <td><strong>Total Mensalidade</strong></td>
            <td><strong>R$ <?= $matricula->calcularMensalidade(); ?></strong></td>
        </tr>
    </table>

    <p><strong>Duração:</strong> <?= $matricula->getMeses() ?> meses</p>
    <p><strong>Subtotal:</strong> R$ <?= number_format($matricula->calcularSubtotal(), 2, ',', '.') ?></p>
    <p><strong>Desconto (<?= $matricula->calcularPercentualDesconto() ?>%):</strong> R$ <?= number_format($matricula->calcularDesconto(), 2, ',', '.') ?></p>
    
    <p class="destaque">Total do Contrato: R$ <?= number_format($matricula->calcularTotal(), 2, ',', '.') ?></p>

    <div class="mensagem">
        <?php if ($matricula->calcularPercentualDesconto() > 0): ?>
            Parabéns! Você ganhou <?= $matricula->calcularPercentualDesconto() ?>% de desconto.
        <?php else: ?>
            Dica: fechando 6 meses ou mais você ganha desconto.
        <?php endif; ?>
    </div>

</body>
</html>

    
           