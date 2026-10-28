<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Locadora</title>
</head>
<body>
    <form action="logica.php" method="POST">
        <h1>Locadora de Veículos</h1>
       <h2>Dados do Cliente</h2>
       <label> Nome: </label>
       <br>
        <input type="text" name="nome_cliente" required> 
        <br><br>

       <label> Email: </label>
       <br>
        <input type="email" name="email_cliente" required> 
        <br><br>


       <h2>Dados de Locação</h2>
       <label> Data de retirada: </label>
       <br>
        <input type="date" name="data_locacao" required> 
        <br><br>

        <label> Quantidade de dias: </label>
        <br>
         <input type="number" name="qtd_dias">
         <br><br>
          
         <label> Categoria do veículo: </label>
         <br>
         <select name="categoria" required>
            <option value="">Selecione a Categoria</option>
            <option value="economico">Econômico - R$100/dia </option>
            <option value="intermediario">Intermediário - R$150/dia </option>
            <option value="suv">Suv - R$250/dia </option>
        </select>
        <br><br>

        <h2>Adicionais</h2>
         <label> Seguro Total(R$ 40,00/dia): </label>
         <br>
        <input type="radio" name="seguro_total" value="Sim">
        <label>Sim</label>

        <input type="radio" name="seguro_total" value="Nao">
        <label>Não</label>s
        <br><br>

         <label> GPS(R$ 15,00/dia): </label>
         <br>
        <input type="radio" name="gps" value="Sim">
        <label>Sim</label>

        <input type="radio" name="gps" value="Nao">
        <label>Não</label>
        <br><br>

         <label> Cadeirinha infantil(R$ 20,00/dia): </label>
         <br>
        <input type="radio" name="cadeirinha_infantil" value="Sim">
        <label>Sim</label>

        <input type="radio" name="cadeirinha_infantil" value="Nao">
        <label>Não</label>
        <br><br>
         
        <button type="submit">Gerar Contrato</button>
    </form>
</body>
</html>