
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
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
            <option value="Básico">Básico - R$ 80,00</option>
            <option value="Plus">Plus - R$ 120,00</option>
            <option value="Premium">Premium - R$ 180,00</option>
        </select>
        <br><br>

        <label>Quantidade de Meses:</label>
        <br>
        <select name="meses" required>
            <option value="">Selecione...</option>
            <option value="1">1 Mês</option>
            <option value="2">2 Meses</option>
            <option value="3">3 Meses</option>
            <option value="4">4 Meses</option>
            <option value="5">5 Meses</option>
            <option value="6">6 Meses</option>
            <option value="7">7 Meses</option>
            <option value="8">8 Meses</option>
            <option value="9">9 Meses</option>
            <option value="10">10 Meses</option>
            <option value="11">11 Meses</option>
            <option value="12">12 Meses</option>
        </select>
        <br><br>

        <label>Modalidades extras (opcional):</label>
        <br>
        <input type="checkbox" name="modalidades[]" value="Natação">
        Natação
        <br>

        <input type="checkbox" name="modalidades[]" value="Funcional">
        Funcional
        <br>

        <input type="checkbox" name="modalidades[]" value="Lutas">
        Lutas
        <br><br>

        <button type="submit">Gerar Matrícula</button>

    </form>

</body>
</html>
