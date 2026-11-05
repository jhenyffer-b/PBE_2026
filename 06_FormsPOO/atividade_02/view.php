<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boletim Escolar</title>
</head>
<body>
    <h2>Sistema de Boletim Escolar</h2>
    <form action="logica.php" method="POST">
        <label for="">Nome do Aluno:</label>
        <br>
        <input type="text" name="nome">
        <br><br>
        <label> Turma: </label>
        <br>
        <select name="turma" required>
            <option value="">Selecionar Turma</option>
            <option value="economico">1º IDS </option>
            <option value="intermediario">2º IDS </option>
            <option value="suv">3º IDS </option>
        </select>
        <br><br>
        <label for="nota1">Nota 1:</label>
        <br>
        <input type="number" id="nota1" name="nota1" min="0" max="10" step="0.1" required>
        <br><br>

        <label for="nota2">Nota 2:</label>
        <br>
        <input type="number" id="nota2" name="nota2" min="0" max="10" step="0.1" required>
        <br><br>

        <label for="nota3">Nota 3:</label>
        <br>
        <input type="number" id="nota3" name="nota3" min="0" max="10" step="0.1" required>
        <br><br>

        <label for="faltas">Faltas:</label>
        <br>
        <input type="number" id="faltas" name="faltas" min="0" max="80" required>
        <br><br>
        
        <button type="submit">Gerar Boletim</button>
    </form>
</body>
</html>

