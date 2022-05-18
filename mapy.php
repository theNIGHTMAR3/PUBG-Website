<!DOCTYPE html>
<html lang="pl">
<head>

	<meta charset="utf-8">
	<title>PlayerUnknown's Battlegrounds</title>
	<meta name="description" content="Strona na temat jednej z najlepszych gier z gatunku Battle Royale!">
	<meta name="keywords" content="PUBG, battleroyale">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	
	<link rel="stylesheet" href="styles/main1.css">
	<link rel="text/javascript" href="scripts/scripts.js">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
	
	<link rel="stylesheet" href="styles/jquery-ui.min.css">
	<link rel="stylesheet" href="styles/jquery-ui.structure.min.css">
	<link rel="stylesheet" href="styles/jquery-ui.theme.min.css">
	

	<script src="scripts/timer.js"></script>
	<script src="scripts/jquery.js"></script>

<script src="scripts/jquery-ui.min.js"></script>



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
   <h2>Mapy</h2>
   </header>
   
   <section id="content">
   W grze dostępnych jest aktualnie 6 map:<br/><br/>
   
   <div class="pictures">
   
   <figure class="photo">
      <img src="img/erangel.jpg" alt="Erangel"/>
	  <figcaption><strong>Erangel</strong></figcaption>
   </figure>
   <figure class="photo">
      <img src="img/miramar.jpg" alt="Miramar"/>
	  <figcaption><strong>Miramar</strong></figcaption>
   </figure>
   <figure class="photo">
      <img src="img/sanhok.jpg" alt="Sanhok"/>
	  <figcaption><strong>Sanhok</strong></figcaption>
   </figure>
   <figure class="photo">
      <img src="img/wikendi.jpg" alt="Wikendi"/>
	  <figcaption><strong>Wikendi</strong></figcaption>
   </figure>
   <figure class="photo">
      <img src="img/karakin.png" alt="karakin"/>
	  <figcaption><strong>Karakin</strong></figcaption>
   </figure>
   <figure class="photo">
      <img src="img/paramo.png" alt="Paramo"/>
	  <figcaption><strong>Paramo</strong></figcaption>
   </figure>
    </div>
	<br/>
	<br/>

	
	<div id="tablica">
	
	<table class="tab">
<tr>
<th>Mapa</th>
<th>Rozmiar [km]</th>
<th>Ilość graczy</th>
<th>Region</th>
<th>Tryby gry</th>
</tr>
<tr>
<td>Erangel</td>
<td>8x8</td>
<td>100</td>
<td>Rosja</td>
<td>Casual/Ranked</td>
</tr>
<tr>
<td>Miramar</td>
<td>8x8</td>
<td>100</td>
<td>Ameryka Środkowa</td>
<td>Casual/Ranked</td>
</tr>
<tr>
<td>Sanhok</td>
<td>4x4</td>
<td>100</td>
<td>Azja</td>
<td>Casual/Ranked</td>
</tr>
<tr>
<td>Wikendi</td>
<td>6x6</td>
<td>100</td>
<td>południowa Europa</td>
<td>Casual/Ranked</td>
</tr>
<tr>
<td>Karakin</td>
<td>2x2</td>
<td>64</td>
<td>Ameryka Środkowa</td>
<td>Casual</td>
</tr>
<tr>
<td>Paramo</td>
<td>3x3</td>
<td>64</td>
<td>Ameryka Południowa</td>
<td>Casual</td>
</tr>
</table>
	
	</div>
   </section>
   </article>
   
   <aside>
   
   <div id="datepicker"></div>
   
  
   <div id="clock"></div>
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