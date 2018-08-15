<!DOCTYPE html>
  <html>
  <head>
    
    <link rel="stylesheet" type="text/css" href="./css/style.css"> 
  </head>

  <body>
 
 <h1>Game Overload</h1>
  <p>Garanta o seu ingresso e curta todas as 
      novidades e lançamentos do 
      mundo dos games,
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