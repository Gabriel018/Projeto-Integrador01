<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Game_Overload</title>
	<link rel="stylesheet" href="css/estilo.css">
</head>
</style>
</head>
<body>

<p id="demo"></p>

<script>
// Set the date we're counting down to
var countDownDate = new Date("Sep 5, 2018 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();

    // Find the distance between now an the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";

    // If the count down is over, write some text
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);
</script>
	
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


