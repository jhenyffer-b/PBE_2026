<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 06</title>
</head>
<body>
    <form action="logica.php" method="POST">
        <h1>Compra de Ingressos</h1>
       <h3>Nome do Cliente:</h3>
        <input type="text" name="nome" placeholder="Nome Cliente:" required>
        <br><br>
        <h3>Nome do Filme:</h3>
         <input type="text" name="nomeFilme" placeholder="Nome Filme:" required>
         <br><br>
          <h3>Quantidade de Ingressos:</h3>
         <input type="number" name="qtd_ingresso" placeholder="Quantidade Ingresso:" required>
         <br><br>
         <h3>Tipo do Ingresso:</h3>
         <input type="radio" name="tipo" value="Meia-Entrada">
         <label for="">Meia-Entrada</label>
         <br><br>
          <input type="radio" name="tipo"  value="Inteira">
          <label for="">Inteira</label>
          <br><br>
        <button type="submit">Comprar Ingresso</button>
    </form>
</body>
</html>