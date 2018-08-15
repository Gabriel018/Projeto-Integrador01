<!DOCTYPE html>
  <html>
  <head>
  <h1>Game Overload 5k </h1> 
    <link rel="stylesheet" type="text/css" href="./css/style.css"> 
  </head>

  <body>

  <p>Garanta o seu ingresso e curta todas as 
      novidades e lançamentos do 
      mundo do lançamento PUBG,
       novas tecnologias, campeonatos e 
       muita diversão!
        Vem jogar com a gente!</p>
        <nav>
            <ul class="">
              <li><a href="index.php">Inicio</a></li>
              <li><a href="">Evento</a></li>
              <li><a href="">Participantes</a></li>
            </ul>
            
            <ul class="">
              <li><a href="?formCadastro">inscriçao</a></li>
              <li><a href="?formLogin">Login</a></li>
            </ul>
          </nav>

<section class="container">
		<?php
			if (!empty($_GET)){
				$p = key($_GET);
				//include "page/".$p.".php";
				include "page/$p.php";
			}	
		?>
	</section>
  

</body>
  </html>