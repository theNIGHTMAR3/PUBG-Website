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

	
	<link rel="stylesheet" href="styles/main1.css">
	<link rel="text/javascript" href="scripts/scripts.js">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
	

	<script src="scripts/timer.js"></script>
	<script src="scripts/jquery.js"></script>
	<script src="scripts/jquery-ui.min.js"></script>
	

	
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
   <h2>Założenia gry</h2>
   </header>
   
   <section id="content">
   <p>
    PlayerUnknown's Battlegrounds (w skrócie PUBG) to gra z gatunku battle royale, stworzona przez studio Bluehole, która miała swoją premierę w marcu 2017, jedna w wersji 1.0 wyszła 12 grudnia 2017. Początkowo była to modyfikacja gry ARMA 3, lecz zdobyła wielką popularność i postanowiono stworzyć oddzielną produkcję. Gra tuż po premierze stała się strasznie popularna i do dzis trzyma rekord najwiekszej ilości graczy w tym samym czasie na platformie Steam. Jest ciągle wspierana i regularnie wychodzą aktualizacje.</p>
	
	<p>Założenia gry:
	<ul id="lista">
	<li>100 graczy lecących samolotem ląduje na ogromnej mapie i walczy o przetrwanie.</li>
	<li>Wygrywa ostatnia żywa osoba lub ostatni żyjący zespół.</li>
	<li>Gracze startuja z niczym i  muszą przeszukiwać budynki rozstawione na mapie, aby znaleźć bronie, amunicje, wyposażenie itp.</li>
	<li style=" line-height:100%;">Zaraz po przelocie samolotu, na mapie zostaje wyznaczony okrąg do którego gracze muszą sie przedostać, ponieważ będzię się zamykać niebieska strefa(bluezone), która zadaje obrażenia. Za każdym razem jak bluezone dojdzie do okręgu, ten się zmieni na mniejszy i cykl powtarza się na nowo, aż jakiś zespół wygra. Za każdym zmniejszeniem się okręgu, strefa zaczyna zadawać coraz większe obrażenia.</li>
	<li>Dzięki pojazdom można przemieszczać się dużo szybciej, lecz są głośne co zdecydowanie zwraca na nie uwagę.</li>
	<li>Można grać solo, duo lub w składach 3-4 osobowych.</li>
	<li>Pełna rozgrywka trwa od 20-33min zależnie od wielkości mapy.</li>
	<li>Wielkości map wachają się od 2x2 [km] do 8x8 [km].</li>
	<li>Możliwośc pojedynkowania się na różne odległości: od walk w zamkniętych budynkach do strzelanin na 300-400m.</li>
	<li>Dobrze rozwinięta scena eSportowa</li>
	</ul>
	
	<div class="linkDiv"><a class="link" target="_blank" href="regiony.html"><h3>eSport w PUBG</h3> </a></div>

	
   </section>
   </article>
   
   <aside>
   
   <div id="datepicker"></div>
   
   <div id="clock"></div>
   
   <div class="logbar">
   
	  <?php  
	
	  //nowe wejście
	if(!isset($_SESSION['error']) && !isset($_SESSION['loggedin'])):  ?> 
	   <div class="logbar">
		   <form action="login.php" method="post">
				<input type="text" name="login" placeholder="login" required/>
				<input type="password" name="pass" placeholder="hasło" required/>
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
		<a class="link" href="galleryView.php"><strong>Galeria zdjęć</strong></a>
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