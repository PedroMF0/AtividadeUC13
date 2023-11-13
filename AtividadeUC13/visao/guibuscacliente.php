<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../estilos/menunav.css">
    <link rel="stylesheet" type="text/css" href="../estilos/index.css">
    <title>Barbearia</title>
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
    <header>
        <h1> Barbearia</h1>
        <p>Cuide bem da sua aparência conosco</p>
    </header>
    
<h2 class="title">Busca Avançada</h2>
<form action="../controle/agendacontrole.php?op=buscarcliente" method="post" name="cadu">
    <fieldset>
        <legend>Busca Avançada</legend>
        <input type="text" name="txtfiltro" id="txtfiltro" placeholder="Digite a busca">

        <label><input type="radio" name="rdfiltro" id="idusuario" value="idCliente" checked="checked">Código</label>
        <br>
        <label><input type="radio" name="rdfiltro" id="nomecliente" value="nomeCliente">Nome</label>
        <br>
        <label><input type="radio" name="rdfiltro" id="partesnome" value="partesnome">Partes do Nome</label>
        <br>
        <label><input type="radio" name="rdfiltro" id="tipo" value="tipo">Tipo</label>
        <br>

        <input type="submit" name="btnbuscar" id="btnbuscar" value="Buscar">
    </fieldset>

</form>
    
    <footer>
        <p>&copy; Barbearia 2023 by Pedro Morales</p>
    </footer>
</body>
</html>
