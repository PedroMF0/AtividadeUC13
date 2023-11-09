<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Barbearia - Adicionar Agendamento</title>
</head>
header>
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
        <label for="nomecliente">Nome:</label>
        <input type="text" name="nome" id="nome" required>
        <br><br>
        
        <label for="data">Data:</label>
        <input type="date" name="data" id="data" required>
        <br><br>
        
        <label for="hora">Hora:</label>
        <input type="time" name="hora" id="hora" required>
        <br><br>

        <label>Tipo de Corte:</label>
            <select name="tipocorte" id="tipocorte">
                <option value="Cabelo">Cabelo</option>
                <option value="Barba">Barba</option>
                <option value="Completo">Completo</option>
            </select>
            <br><br>
        
        <input type="submit" value="Salvar">
        <input type="reset" value="Limpar">
    </form>
</body>
</html>