<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo Formulário</title>
</head>
<body>
    <form action="logica.php" method="POST">
        <h1>Calculadora</h1>
       <h3>Primeiro número:</h3>
        <input type="number" name="numero1" placeholder="Número 1:" required>
        <br><br>
        <h3>Segundo número:</h3>
         <input type="number" name="numero2" placeholder="Número 2:" required>
         <br><br>
          <h3>Operação:</h3>
          <select name="operacao" required>
            <option value="">Selecione a operação</option>
            <option value="+">Soma</option>
            <option value="-">Subtração</option>
            <option value="*">Multiplicação</option>
            <option value="/">Divisão</option>
        </select>       
        <br><br>
        <button type="submit">Calcular</button>
    </form>
</body>
</html>