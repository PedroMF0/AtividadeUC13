<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../estilos/menunav.css">
    <link rel="stylesheet" type="text/css" href="../estilos/index.css">
    <title>Barbearia - Adicionar Agendamento</title>
</head>
<header>
    <nav id="navMenu">
        <ul>
            <li><a href="../index.php">Página Inicial</a></li>
            <li><a href="guiagendamento.php">Marque seu Horário</a></li>
        </ul>
    </nav>
</header>
<body>
    <h1>Adicionar Agendamento</h1>
    
    <form action="" method="post">
            <label for="nome">Nome:</label>
            <input type="text" name="txtnome" id="txtnome" required>
            
            <label for="data_hora">Data e Hora:</label>
            <input type="datetime-local" name="data_hora" id="data_hora" required>

            <label for="tipo_corte">Tipo de Corte:</label>
            <select name="tipo_corte" id="tipo_corte" required>
                <option value="cabelo">Cabelo</option>
                <option value="barba">Barba</option>
                <option value="ambos">Ambos</option>
            </select>

            <button type="submit">Agendar</button>
            <button type="reset">Limpar</button>
    </form>
</body>
</html>