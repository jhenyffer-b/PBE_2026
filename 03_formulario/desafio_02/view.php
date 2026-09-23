<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 02</title>
</head>
<body>
    <form action="logica.php" method="POST">
        <h1>Carrinho de Compras</h1>
       <h2>Dados do Cliente:</h2>
       <label> Nome Cliente: </label>
       <br>
        <input type="text" name="dados_cliente"> 
        <br><br>
        <h2>Produto 1:</h2>
        <label> Nome: </label>
        <br>
         <input type="text" name="nome_produto01"> 
         <br><br>
        <label> Preço: </label>
        <br>
         <input type="number" name="preco_01">
         <br><br>
         <label> Quantidade: </label>
        <br>
         <input type="number" name="qtd_01"> 
         <br><br>
         <h2>Produto 2:</h2>
        <label> Nome: </label>
        <br>
         <input type="text" name="nome_produto02"> 
         <br><br>
         <label> Preço: </label>
        <br>
         <input type="number" name="preco_02"> 
         <br><br>
         <label> Quantidade: </label>
        <br>
         <input type="number" name="qtd_02"> 
         <br><br>
         <h2>Produto 3:</h2>
         <label> Nome: </label>
        <br>
         <input type="text" name="nome_produto03"> 
         <br><br>
         <label> Preço: </label>
        <br>
         <input type="number" name="preco_03">
         <br><br>
         <label> Quantidade: </label>
        <br>
         <input type="number" name="qtd_03">
        <br><br>
        <button type="submit">Finalizar Compra</button>
    </form>
</body>
</html>