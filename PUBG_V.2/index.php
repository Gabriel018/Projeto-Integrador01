<!DOCTYPE html>
<?php 
	include_once 'config.php';
?>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>PUBG - Ediçao limitada</title>
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body>

	<script
    src="js/alerta.js">
	</script>

	<nav class="bg-preto">
		<ul class="">
			<li><a href="index.php">Inicio</a></li>
			<li><a href="?noticias">Noticias</a></li>
			<li><a href="?listarCliente">Listar Cliente</a></li>
		</ul>
		
		<ul class="direita">
			<li><a href="?formCliente">Cadastro</a></li>
			<li><a href="?formLogin">Login</a></li>
		</ul>
	</nav>
	
	<header>
		<h1>
		Playerunknown's Battlegrounds PUBG 2018
		</h1>
		<h2>
		Assim como em H1Z1 e outros games similares, o que conta aqui é a liberdade.
		 Não há zumbis, então é preciso se preocupar mais com outros jogadores do que
		  com ameaças do ambiente. Apesar de termos uma ilha grandiosa, será fácil 
		  achar outros participantes – dado o sucesso do game, o que traz uma grande
		 quantidade de jogadores sempre ativos. É possível criar equipes e jogar 
		cooperativamente com amigos, mas não é o foco.
		</h2>
	</header>
	
	<iframe width="706" height="397" 
	src="https://www.youtube.com/embed/WjgyIMPlz3k" frameborder="0" 
	allow="autoplay; encrypted-media" allowfullscreen></iframe>

	
	<section class="container">
		<?php
			if (!empty($_GET)){
				$p = key($_GET);
				//include "page/".$p.".php";
				include "page/$p.php";
			}	
		?>
	</section>
	
	<footer class="bg-preto branco">
	</footer>
</body>
</html>


