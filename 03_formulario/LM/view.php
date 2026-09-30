<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Inscrição em Evento</title>
</head>
<body style="margin: 20px; background-color: #ffffff;">

    <h2 style="color:darkred; font-family: Comic Sans MS, cursive;;">Inscrição em Evento</h2>

    <form action="logica.php" method="POST" style="background-color:#f3e5f5; padding: 15px; border-radius:8px; width:350px;">
        
        <label for="nome">Nome Completo:</label><br>
        <input type="text" id="nome" name="nome" style="width:100%; margin-bottom:10px; color:purple; font-family:Arial;"><br>

        <label for="ingresso">Tipo de ingresso:</label><br>
        <select id="ingresso" name="ingresso" style="width:100%; margin-bottom:10px; color:purple; font-family:Arial;">
            <option value="estudante">Estudante</option>
            <option value="profissional">Profissional</option>
            <option value="vip">Vip</option>
        </select><br>

        <label for="data" style="color:purple; font-family:Arial;">Data do Evento:</label><br>
        <input type="date" id="data" name="data" style="width: 100%; margin-bottom:10px;"><br>

        <label for="hora" style="color:purple; font-family:Arial;">Hora de Chegada:</label><br>
        <input type="time" id="hora" name="hora" style="width: 100%; margin-bottom: 15px;"><br>

        <button type="submit" name="inscrever" style="background:purple; color:white; padding:5px 10px; border: none; cursor: pointer;">Inscrever-se</button>

    </form>

</body>
</html>
