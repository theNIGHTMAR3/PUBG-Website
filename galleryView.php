<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pl">
<head>

	<meta charset="utf-8">
	<title>PlayerUnknown's Battlegrounds</title>
	<meta name="description" content="Strona na temat jednej z najlepszych gier z gatunku Battle Royale!">
	<meta name="keywords" content="PUBG, battleroyale">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" href="styles/jquery-ui.min.css">
	<link rel="stylesheet" href="styles/jquery-ui.structure.min.css">
	<link rel="stylesheet" href="styles/jquery-ui.theme.min.css">
	<link rel="stylesheet" href="styles/jquery.fancybox.min.css">

	
	<link rel="stylesheet" href="styles/main2.css">
	<link rel="text/javascript" href="scripts/scripts.js">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
	

	<script src="scripts/timer.js"></script>
	<script src="scripts/jquery.js"></script>
	<script src="scripts/jquery-ui.min.js"></script>
	<script src="scripts/jquery.fancybox.min.js"></script>
	

	
	<style>
	#lista
	{
	   line-height:250%;
	}
	</style>


</head>

<body onload="odliczanie() ">

   <header>
   
       <div class="logo">
	   <a class="logoLink" href="index.php">
	        <img class="logo" src="img/logo2.jpg" alt="PUBG"/>
        </a>
        </div>
		   <a class="logoLink" href="index.php">

         <div id="napis">
                <strong>PLAYERUNKNOWN'S BATTLEGROUNDS</strong>
          </div>
		  </a>
		
		  
		 <nav>
		 <ol class="menu">
		 <li > <a href="index.php">Założenia</a> </li>
		 <li><a href="mapy.php">Mapy</a></li>
		 <li id="esport"> eSport
		    <ul>
			<li> <a href="regiony.html">Regiony </a></li>
			<li> <a href="turnieje.html">Turnieje </a></li>
		   </ul>
		 </li>
		 <li><a href="updates.html">Updates</a></li>
		 <li> <a href="feedback.php">Feedback</a></li>
		 </ol>
		 </nav>
   </header>
   
  <main>
   
   <article>
   
   <header class="info">
   <h2>Galeria zdjęć</h2>
   </header>
   
   <section id="content">
		<form method="post" action="">
			<div id="pictures">
				<?php

					unset($_SESSION['fav']);
					require_once 'gallery.php'; //render galerii
				?>
			</div>
			<br/><br/>
			<input type="submit" value="Dodaj zaznaczone zdjęcia do ulubionych"/> 
		</form>

	   <div class="linkDiv"><a class="link"		href="favouritesView.php"><h3>Ulubione zdjęcia</h3> </a></div>  <!--ulubione-->

	   	<?php  
	if($page > 1){               //inne strony
		echo '<div class="linkDiv right"><a class="link" href="?page=' . $prev . '"<h3>Poprzednia strona</h3> </a></div>';
		if($page * $pageSize < $total) {
			echo '<div class="linkDiv right"><a class="link" href="?page=' . $next . '"<h3>Następna strona</h3> </a></div>';
		}
	} else {
		if($page * $pageSize < $total) {
			echo '<div class="linkDiv right"><a class="link" href="?page=' . $next . '"<h3>Następna strona</h3> </a></div>';
		}
	}
	?>
   </section>
   </article>
   
   <aside>
   
   <div id="datepicker"></div>
   
   <div id="clock"></div>
   
   <div class="logbar">
   
	  <?php  
	
	  //nowe wejście
	if(!isset($_SESSION['error']) && !isset($_SESSION['loggedin'])): ?> 
	   <div class="logbar">
		   <form action="login.php" method="post">
				<input type="text" name="login" placeholder="login"/>
				<input type="password" name="pass" placeholder="hasło"/>
				<br/>
				<input type="submit" value="Zaloguj się"/>
		   </form>
	   </div>
	<div class="logbar">
		<a class="link" href="registerView.php"><strong> Zarejestruj się</strong></a>
	</div>
	   <?php
	   //udane logowanie
   elseif(isset($_SESSION['authentication']) && (!isset($_SESSION['error']))): ?>

		<div class="logbar">
			Jesteś zalogowany jako <?php echo $_SESSION['login'];?>
		</div>
		<div class="logbar">
			<a class="link" href="logout.php">Wyloguj się</a>
		</div>

	   <?php else:  //nieudane logowanie
	   ?>
	<div class="logbar">
		<form action="login.php" method="post">
			<input type="text" name="login" placeholder="login"/>
			<input type="password" name="pass" placeholder="hasło"/>
			<br/>
			<input type="submit" value="Zaloguj się"/>
		</form>
		<?php echo $_SESSION['error'];?>
	</div>
	<div class="logbar">
		<a class="link" href="registerView.php"> Zarejestruj się</a>
	</div>
	<?php endif;	?>
	   
   
   <div class="logbar">
		<a href="uploadView.php" class="link"><strong>Prześlij zdjęcie</strong></a>
   </div>
		
   </div>
   </aside>

</main>

<footer>
Strona została stworzona jako projekt na pierwszy rok studiów i poświęcona jest grze PlayerUnknown's Battlegrounds. <br/>&copy; Wszelkie prawa zastrzeżone.
</footer>

	<script>
$("#datepicker").datepicker();
</script>


</body>

</html>