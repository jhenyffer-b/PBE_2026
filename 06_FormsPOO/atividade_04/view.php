
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrícula na Academia</title>
</head>
<body>

    <h2>Matrícula Academia 🏋️‍♀️</h2>

    <h3>Dados do Aluno</h3>
    <form action="logica.php" method="POST">

        <label>Nome:</label>
        <br>
        <input type="text" name="nome" required>
        <br><br>

        <label for="peso">Peso (Kg):</label>
        <br>
        <input type="number" id="peso" name="peso" step="0.1" required>
        <br><br>

        <label for="altura">Altura (M):</label>
        <br>
        <input type="number" id="altura" name="altura" step="0.01" required>
        <br><br>

        <h3>Dados da Matrícula</h3>

        <label>Plano:</label>
        <br>
        <select name="plano" required>
            <option value="">Selecione...</option>
            <option value="basico">Básico - R$ 80,00</option>
            <option value="plus">Plus - R$ 120,00</option>
            <option value="premium">Premium - R$ 180,00</option>
        </select>
        <br><br>

        <label>Quantidade de Meses:</label>
        <br>
        <input type="number" name="meses" min="1" max="12" required>
        <br><br>

        <label>Modalidades extras (opcional):</label>
        <br>
        <input type="checkbox" name="modalidades[]" value="natacao">
        Natação (+R$60,00)
        <br>

        <input type="checkbox" name="modalidades[]" value="funcional">
        Funcional (+R$40,00)
        <br>

        <input type="checkbox" name="modalidades[]" value="lutas">
        Lutas (+R$50,00)
        <br><br>

        <button type="submit">Gerar Matrícula</button>

    </form>
    </body>
</html>
