<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo Formulário</title>
</head>
<body>
    <form action="logica.php" method="POST">
        <h1>Cadastro de Usuário</h1>
       <h3>Nome:</h3>
        <input type="text" name="nome" placeholder="Nome:" required>
        <br><br>
        <h3>Email:</h3>
         <input type="email" name="email" placeholder="Email:" required>
         <br><br>
          <h3>Senha:</h3>
         <input type="password" name="senha" placeholder="Senha:" required>
        <br><br>
        <button type="submit">Cadastrar</button>
         <button type="submit">Limpar</button>
    </form>
</body>
</html>
