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
            <li><a href="index.php">Página Inicial</a></li>
            <li><a href="visao/guiagendamento.php">Marque seu Horário</a></li>
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
            <img src="img/trilha.jpg" alt="Bicicleta 1">
            <h3>Cabelo</h3>
            <p>Perfeita para trilhas e aventuras na natureza.</p>
        </div>
        <div class="product">
            <img src="img/colli bike.jpg" alt="Bicicleta 2">
            <h3>Barba</h3>
            <p>Ideal para ciclistas que amam o asfalto.</p>
        </div>
        <section class="testimonials">
            <h2>Depoimentos dos Clientes</h2>
            <div class="testimonial">
                <img src="img/cliente 1.jpg" alt="Foto do Cliente 1">
                <p>"Excelente loja de bicicletas! Comprei uma bicicleta de montanha aqui e estou muito satisfeito com a qualidade do produto e o atendimento ao cliente. Recomendo!"</p>
                <p><strong>João Silva</strong></p>
            </div>
            <div class="testimonial">
                <img src="img/cliente 3.jpg" alt="Foto do Cliente 2">
                <p>"Adoro minha nova bicicleta de estrada da Loja de Bikes. É leve e rápida, e o processo de compra foi muito fácil. Obrigado!"</p>
                <p><strong>Carlos Santos</strong></p>
            </div>
        </section>
        
    </section>
    <footer>
        <p>&copy; Barbearia 2023 by Pedro Morales</p>
    </footer>
</body>
</html>
