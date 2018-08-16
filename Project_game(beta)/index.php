<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Game_Overload</title>
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body>
	<nav class="bg-preto">
		<ul class="">
			<li><a href="index.php">Inicio</a></li>
			<li><a href="?produtos">Produtos</a></li>
		</ul>
		
		<ul class="direita">
			<li><a href="?formCliente">Cadastro</a></li>
			<li><a href="?formLogin">Login</a></li>
			<li><a href="?produto">Produto</a></li>
		</ul>
	</nav>
	     <h1>
			GAME OVERLOAD - EDIÇAO PUBG
		</h1>
	<header>
		
		<h3>
		Garanta o seu ingresso e curta todas as 
      novidades e lançamentos do 
      mundo do lançamento PUBG,
       novas tecnologias, campeonatos e 
       muita diversão!
        Vem jogar com a gente!
		</h3>
	</header>
	
	<section class="">
	<?php
		if (!empty($_GET)){
			$p = key($_GET);
			include "page/".$p.".php";
			//include "page/$p.php";
		}

	   
	?>
	</section>
	
	<footer class="bg-preto branco">
	
	</footer>
</body>
</html>


