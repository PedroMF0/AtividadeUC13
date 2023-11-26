<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilos/menunav.css">
    <link rel="stylesheet" type="text/css" href="estilos/index.css">
    <title>Barbearia</title>
</head>
<header>
    <nav id="navMenu">
        <ul>
            <li><a href="index.php">Página Inicial</a></li>
            <li><a href="visao/guiagendamento.php">Marque seu Horário</a></li>
            <li><a href="visao/guifuncionario.php">Funcionário</a></li>
            <li><a href="index2.php">Baixar PDF</a></li>
        </ul>
    </nav>
</header>

<body>
    <header>
        <h1> Barbearia</h1>
        <p>Cuide bem da sua aparência conosco</p>
    </header>
    <section class="featured-products">
        <h2>Cortes</h2>
        <div class="product">
            <img src="img/cabelo.jpg" alt="cabelo 1">
            <h3>Cabelo</h3>
            <p>Um corte perfeito para festas, mantendo seu estilo em harmonia com a sua jornada.</p>
        </div>
        <div class="product">
            <img src="img/barba.jpg" alt="barba 1">
            <h3>Barba</h3>
            <p>Oferecemos um serviço impecável para a barba, ideal para homens que amam o asfalto e desejam manter um visual elegante.</p>
        </div>
        <section class="testimonials">
            <h2>Depoimentos dos Clientes</h2>
            <div class="testimonial">
                <img src="img/cliente.png" alt="Foto do Cliente 1">
                <p>"Excelente atendimento na Barbearia! Realizei um corte e barba aqui e estou muito satisfeito com a qualidade e atenção dos profissionais. Recomendo!"</p>
                <p><strong>João Silva</strong></p>
            </div>
            <div class="testimonial">
                <img src="img/cliente.png" alt="Foto do Cliente 2">
                <p>"Adoro a minha barba feita na Barbearia. O ambiente é agradável e o atendimento é excepcional. Obrigado pela experiência única!"</p>
                <p><strong>Carlos Santos</strong></p>
            </div>
        </section>
        
    </section>
    
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	<!-- end #page --> 
</div>
	<footer>
        <p>&copy; Barbearia 2023 by Pedro Morales</p>
    </footer>
<!-- end #footer -->
</body>
<!-- InstanceEnd --></html>
