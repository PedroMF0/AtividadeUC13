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
    
<h2 class="title">Exclusão de Cliente</h2>
<form action="../controle/usuariocontrole.php?op=deletar" method="post" name="exc" id="exc">
    <fieldset><legend>Excluir</legend>
        <label>Digite o código:
            <input type="text" name="idCliente" id="idCliente">*
        </label><br>

        <input type="submit" name="btnexcluir" id="btnexcluir" value="Excluir">
    </fieldset>

</form>
    
    <footer>
        <p>&copy; Barbearia 2023 by Pedro Morales</p>
    </footer>
</body>
</html>
