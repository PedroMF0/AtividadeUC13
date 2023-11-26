<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../estilos/menunav.css">
    <link rel="stylesheet" type="text/css" href="../estilos/alterarcliente.css">
    <title>Barbearia</title>
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
    
<h1 class="title">Alterar Cliente</h1>
<?php
    if(isset($_SESSION['agenda']) ){
        include_once '../modelo/agenda.class.php';
        $age = array();
        $age = unserialize($_SESSION['agenda']);
     }
?>
<form action="../controle/agendacontrole.php?op=confirmalterar" method="post" name="cadu">
    <fieldset>
        <legend>Agendar Corte</legend>
        <label>Código: <input type="text" name="txtidcliente" id="txtidcliente" value="<?php  ?>">*</label>
		<br>
        <label>Nome: <input type="text" name="txtnome" id="txtnome" value="<?php  ?>"></label>
		<br>
        <label>Data e Hora: <input type="datetime-local" name="data_hora" id="data_hora" value="<?php  ?>"></label>
		<br>
		<label>Tipo de Corte: 
			<select name="tipo_corte" id="tipo_corte">
				<?php
					if($age[0]->tipoCorte == 'cabelo'){
						echo '<option values = "cabelo" selected = "selected">Cabelo</option> ';
						echo '<option value = "barba">Barba</option> ';
						echo '<option value = "ambos">Ambos</option> ';
					}else if($age[0]->tipoCorte == 'barba'){
						echo '<option values = "cabelo">Cabelo</option> ';
						echo '<option value = "barba" selected = "selected">Barba</option> ';
                        echo '<option value = "ambos">Ambos</option> ';
					}else{
                        echo '<option values = "cabelo">Cabelo</option> ';
                        echo '<option value = "barba">Barba</option> ';
                        echo '<option value = "ambos" selected = "selected">Ambos</option> ';
                    }//fecha o else

					unset($_SESSION['agenda']);
				?>
			</select>
		</label><br>

		<input type="submit" name="btnalterar" id="btnalterar" value="Alterar">
		<input type="reset" name="btnlimpar" id="btnlimpar" value="Limpar">
    </fieldset>
</form>

    <div id="sidebar">
		<?php
				if(!isset($_SESSION['privateUser']) ){
			?>
				<form name="login" id="login" method="post" action="../controle/agendacontrole.php?op=logar">
						<input type="text" name="txtlogin" id="txtlogin" placeholder="login">
						<br>
						<input type="password" name="txtsenha" id="txtsenha" placeholder="senha">
						<br>

						<input type="submit" name="btnlogar" id="btnlogar" value="Logar">
				</form>
			<?php
				}else{
			?>
						<ul>
							<li>
								<h2>Links Privado</h2>
								<ul>
									<li><a href="../controle/agendacontrole.php?op=consultarcliente">Consultar</a></li>
									<li><a href="guidelcliente.php">Excluir</a></li>
									<li><a href="guibuscacliente.php">Busca Avançada</a></li>
									<li><a href="../controle/agendacontrole.php?op=deslogar">Deslogar</a></li>
									<li><a href="guialterarcliente.php">Alterar</a></li>
									<li><a href="guicadfuncionario.php">Cadastro de Funcionário</a></li>
								</ul>
							</li>
						</ul>
			<?php
				}//fim do else
			?>
		</div>
    <footer>
        <p>&copy; Barbearia 2023 by Pedro Morales</p>
    </footer>
</body>
</html>
