<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../estilos/menunav.css">
    <link rel="stylesheet" type="text/css" href="../estilos/agendamento.css">
    <title>Barbearia - Adicionar Agendamento</title>
</head>
<header>
    <nav id="navMenu">
        <ul>
            <li><a href="../index.php">Página Inicial</a></li>
            <li><a href="guiagendamento.php">Marque seu Horário</a></li>
            <li><a href="guifuncionario.php">Funcionário</a></li>
            <li><a href="../index2.php">Baixar PDF</a></li>
        </ul>
    </nav>
</header>
<body>
    <h1>Adicionar Agendamento</h1>
    
    <form action="../controle/agendacontrole.php?op=marcarhora" method="post">
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

    <script>
        const dataHoraInput = document.getElementById('data_hora');
        const dataAtual = new Date();
        
        // Convertendo a data atual para o formato de datetime-local
        const ano = dataAtual.getFullYear();
        const mes = String(dataAtual.getMonth() + 1).padStart(2, '0');
        const dia = String(dataAtual.getDate()).padStart(2, '0');
        const hora = String(dataAtual.getHours()).padStart(2, '0');
        const minutos = String(dataAtual.getMinutes()).padStart(2, '0');
        
        const dataHoraMinima = `${ano}-${mes}-${dia}T${hora}:${minutos}`;

        dataHoraInput.setAttribute('min', dataHoraMinima);
    </script>
</form>

    
     <footer>
        <p>&copy; Barbearia 2023 by Pedro Morales</p>
    </footer>
</body>
</html>