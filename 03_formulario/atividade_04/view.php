<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 04</title>
</head>
<body>
    <form action="logica.php" method="POST">
        <h1 style="text-align: center;">Calcular Média do Aluno</h1>
       <h3>Nome do Aluno:</h3>
        <input type="text" name="nome_aluno" placeholder="Nome do Aluno:" required>
        <br><br>
        <h3>Nota 1:</h3>
         <input type="number" name="nota01" placeholder="Nota 01:" step="0.01" required>
         <br><br>
          <h3>Nota 02:</h3>
         <input type="number" name="nota02" placeholder="Nota 02:" step="0.01" required>
         <br><br>
          <h3>Nota 03:</h3>
         <input type="number" name="nota03" placeholder="Nota 03:" step="0.01" required>
         <br><br>
        <button type="submit">Calcular Média</button>
    </form>
</body>
</html>

</body>
