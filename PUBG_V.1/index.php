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
	<script>
     function comprar(){
        
		alert("Unidades do Pre alpha estao se esgotando!!!");
	 }
    setTimeout(function() {
		comprar();
		
	}, 3000);
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
		<h3>
		Assim como em H1Z1 e outros games similares, o que conta aqui é a liberdade.
		 Não há zumbis, então é preciso se preocupar mais com outros jogadores do que
		  com ameaças do ambiente. Apesar de termos uma ilha grandiosa, será fácil 
		  achar outros participantes – dado o sucesso do game, o que traz uma grande
		 quantidade de jogadores sempre ativos. É possível criar equipes e jogar 
		cooperativamente com amigos, mas não é o foco.
		</h3>
	</header>
	
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


