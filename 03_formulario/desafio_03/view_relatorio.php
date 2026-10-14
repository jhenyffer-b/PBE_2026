<!DOCTYPE html> 
<html lang="pt_br"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Desafio 03</title> 
</head> 
<body style="background-color:#f2f7ff;"> 
    <h1 style="text-align: center; color:#0057b8;">Dados Voo ✈️</h1> 
    <table border="1" style="width: 100%"> 
         <img src="viaviagens.png" alt="VIA viagens"
            style="width: 100%; height: 390px; object-fit: fill;">
            <br><br>
        <thead> 
            <tr> 
                <th>Nome</th> 
                <th>Telefone</th> 
                <th>CPF</th> 
                <th>Destino</th> 
                <th>Horário Embarque</th> 
                <th>Passagem</th> 
                <th>Tipo Voo</th> 
                <th>Tipo</th> 
              
            </tr> 
            <tr> 
                <td style="text-align: center;"><?= $nome_cliente ?></td> 
                <td  style="text-align: center;"><?= $telefone_cliente?></td> 
                <td  style="text-align: center;"><?= $cpf_cliente?></td> 
                <td  style="text-align: center;"><?= $destino?></td> 
                <td  style="text-align: center;"><?=$horario_embarque?></td>
                <td  style="text-align: center;"><?=$passagem?></td>
                <td  style="text-align: center;"><?=$tipo_voo?></td>
                <td  style="text-align: center;"><?=$tipo ?></td>
               
           </tr> 
            
        </thead>  
    </table> 
</body> 
</html>