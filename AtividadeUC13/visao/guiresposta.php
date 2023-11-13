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
    
<h2 class="title">Resposta</h2>
<p>
   
<?php
    if (isset($_SESSION['msg'])) {
         echo $_SESSION['msg'];

    } else if (isset($_SESSION['agenda'])) {
        // Successfully registered a user
        include '../modelo/agenda.class.php';
        $age = new Agenda();
        $age = unserialize($_SESSION['agenda']);
        echo 'O Cliente '.$age->nomeCliente.' foi agendado com sucesso!';
    } else {
        echo 'Variável de sessão não encontrada!';
    }
    ?>
</p>
    
    <footer>
        <p>&copy; Barbearia 2023 by Pedro Morales</p>
    </footer>
</body>
</html>
