<?php

$link = mysql_connect('localhost', 'root', '');
if (!$link) {
	die('Não foi posiível conectar: ' . mysql_error());
}
echo "Conexão bem sucedida <br/>";

$db_selected = mysql_select_db('meusite', $link);
if (!$db_selected) {
	die ('Banco não encontrado!!! ' . mysql_error());
}

$result = mysql_query('SELECT * FROM PRODUTOS WHERE 1=1');
if (!$result) {
    die('Consulta Inválida: ' . mysql_error());
}



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>bik craft</title>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/styles.css">
	<script src="js/animacao.js"></script>
</head>
<body>
	<header class="header">
	<?php include_once('cabecalho.php'); ?>
	</header>
	<section class="row introducao">
		<div class="container animated fadeInDown">
	<h1>Bicicletas Feitas a Mão</h1>
	<blockquote class="quote-externo">
		<p>"não tenha nada em sua casa que você não considere útil ou acredita ser bonito"</p>
		<cite>WILLIAM MORRIS</cite>
	</blockquote>	
		<a href="produtos.html" class="btn botao">Orçamento</a>
		</div>
	</section>
	
	<?php
	while ($row = mysql_fetch_assoc($result)) {
    echo utf8_encode($row['modelo']);
    echo "<br/>";
    echo utf8_encode($row['marca']);
    echo "<br/>";
    echo utf8_encode($row['descricao']);
    echo "<br/>";
	}
	?>
	
    <section class="container produtos animated fadeInDown">  	
		<h2 class="subtitulo">Produtos</h2>
		<ul class="produtos_lista">
			<li class="col-md-4 col-sm-4 col-xs-12">
				<div class="produtos_lista_icone animar-interno1">	
					<div class="produtos_icone">
					<img src="img/produtos/passeio.png" alt="Bicicleta Passeio">
				</div>
			<h3>Passeio</h3>
			<p>Muito melhor do que passear pela orla a vidros fechados.</p>
			</div>
			</li>
			<li class="col-md-4 col-sm-4 col-xs-12">
				<div class="produtos_lista_icone animar-interno2">
					<div class="produtos_icone">	
						<img src="img/produtos/esporte.png" alt="Bicicleta Esporte">
				</div>
				<h3>Esporte</h3>
				<p>Mais rápida do que Forrest Gump, ninguém vai pegar você.</p>	
			</li>
			
			<li class="col-md-4 col-sm-4 col-xs-12">
				<div class="produtos_lista_icone animar-interno3">
					<div class="produtos_icone">
				<img src="img/produtos/retro.png" alt="Bicicleta Retrô">
			</div>
				<h3>Retrô</h3>
				<p>O passado volta para lembrarmos o que devemos fazer no futuro</p>
			</li>
		</ul>
		<div class="call">
			<p>clique aqui e veja os detalhes dos produtos</p>
			<a href="produtos.html" class="btn botao botao-preto">Produtos</a>
		</div>
    </section>
    <section class="row portfolio">
		<div class="container">
			<h2 class="subtitulo">Portfólio</h2>
			<div class="portfolio_lista">
				<div class="col-md-6 col-sm-6 col-xs-12">
					<img src="img/portfolio/passeio.jpg" class="img-rounded" alt="Bicicleta Passeio">
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<img src="img/portfolio/retro.jpg" class="img-rounded"	alt="Bicicleta Retrô">
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<img src="img/portfolio/esporte.jpg" class="img-rounded" alt="Bicicleta Esporte">
				</div>
			</div>		
			<div class="call">
				<p>conheça mais o nosso portfólio</p>
				<a href="portfolio.html" class="btn botao">Portfólio</a>
			</div>
		</div>
	</section>
	<section class="qualidade container">
		<h2 class="subtitulo">Qualidade</h2>
		<img src="img/bikcraft-qualidade.png" alt="Bikcraft">
		<!-- ul.qualidade_lista>li.col-md-6*3>h3+p -->
		<ul class="qualidade_lista">
			<li class="col-md-4">
				<h3>Durabilidade</h3>
				<p>Sólida como pedra, leve como o vento e resistente como o diamante, são nossos diferenciais.</p>
			</li>
			<li class="col-md-4">
				<h3>Design</h3>
				<p>Feitas sob medida para o melhor conforto e eficiência. Adaptamos a sua Bikcraft para o seu corpo.</p>
			</li>
			<li class="col-md-4">
				<h3>Sustentabilidade</h3>
				<p>Além de ajudar a cuidar do meio ambiente, tirando carros da rua, toda a produção é sustentável.</p>
			</li>
		</ul>
				<div class="call">
			<p>conheça mais a nossa história</p>
			<a href="sobre.html" class="btn botao botao-preto">Sobre</a>
		</div>
		
	</section>

	<footer>
		<div class="footer">
			<div class="container">
				<div class="footer_historia col-md-4">
					<h3>Nossa História</h3>	
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde at minima magni labore a quibusdam odit, provident eos ullam quis corporis veniam alias necessitatibus ut voluptatem odio! Nesciunt, laboriosam officiis!</p>
				</div>
				<div class="footer_contato col-md-4">
					<h3>Contato</h3>
					<ul>
						<li>- 21 9988-7766</li>
						<li>- contato@bikecraft.com</li>
						<li>- Botafogo - RJ</li>
					</ul>
				</div>
				<div class="footer_redes col-md-4">
					<h3>Redes Sociais</h3>
					<!-- ul>li*3>a>img -->
					<ul>
						<li><a href="#"><img src="img/redes-sociais/facebook.png" alt="Facebook"></a></li>
						<li><a href="#"><img src="img/redes-sociais/instagram.png" alt="Instagram"></a></li>
						<li><a href="#"><img src="img/redes-sociais/twitter.png" alt="Twitter"></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="copy">
			<div class="container_rodape">
				<p>Bikecraft 2017 - Alguns direitos reservados</p>
			</div>
		</div>
	</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</body>
</html>