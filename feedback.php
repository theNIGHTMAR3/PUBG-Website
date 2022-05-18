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
   <h2>Feedback</h2>
   </header>
   
   <section id="content">
   <p>
   Zachęcam do wypełnienia ankiety o upodobaniach w PUBG'u.</p>
   
   <form method="post">
   <div class="row">
   <fieldset>
   <legend>PUBG nick </legend>
   <label> <input type="text" name="nick" placeholder="nick">  </label>
   </fieldset>
   </div>
   
   
   <div class="row">
   <fieldset>
   <legend>Płeć</legend>
   <label><input type="radio" name="plec">  Kobieta</label>
   <label><input type="radio" name="plec"> Mężczyzna</label>  
   </fieldset>
   </div>
  
   <div class="row">
      <label for="hours"> Ilość godzin w grze</label>
	  <select id="hours">
	  <option> mniej niż 100</option>
	  <option> 100-250</option>
	  <option> 250-500</option>
	  <option> 500-1000</option>
	  <option>1000-1500 </option>
	  <option>ponad 1500 </option>
	  </select>
   </div>
   
   <div class="row">
   <fieldset>
   <legend>Ile godzin grasz dziennie?</legend>
   <label><input type="number" name="h" step="0.5"></label> 
   </fieldset>
   </div>
   
   
   <div class="row">
   <fieldset>
   <legend>Ulubiony karabin szturmowy</legend>
   <label><input type="radio" name="AR">M416</label>
   <label><input type="radio" name="AR"> M16a4</label>  
   <label><input type="radio" name="AR"> AKM</label>  
   <label><input type="radio" name="AR"> SCAR-L</label>  
   <label><input type="radio" name="AR"> BERYL</label>  
   <label><input type="radio" name="AR"> MUTANT</label>  
   <label><input type="radio" name="AR"> AUG</label>  
   <label><input type="radio" name="AR"> GROZA</label>  
   </fieldset>
   </div>
   
   <div class="row">
   <fieldset>
   <legend>Ulubiony karabin wyborowy</legend>
   <label><input type="radio" name="SR">SKS</label>
   <label><input type="radio" name="SR"> SLR</label>  
   <label><input type="radio" name="SR"> MINI-14</label>  
   <label><input type="radio" name="SR"> MK-14</label>  
   <label><input type="radio" name="SR"> KAR98K</label>  
   <label><input type="radio" name="SR"> M24</label>  
   <label><input type="radio" name="SR"> AWM</label>  
   </fieldset>
   </div>
   
   <div class="row">
   <fieldset>
   <legend>Ulubiony zestaw granatów</legend>
   <div class="col">
   <div><label><input type="checkbox" name="nades">  Odłamkowy</label></div>
   <div><label><input type="checkbox" name="nades">  Odłamkowy</label></div>
   <div><label><input type="checkbox" name="nades">  Odłamkowy</label></div>
   </div>
   <div class="col">
   <div><label><input type="checkbox" name="nades"> Dymny</label>  </div>
   <div><label><input type="checkbox" name="nades"> Dymny</label>  </div>
   <div><label><input type="checkbox" name="nades"> Dymny</label>  </div>
   </div>
   <div class="col">
   <div><label><input type="checkbox" name="nades"> Mołotow</label>  </div>
   <div><label><input type="checkbox" name="nades"> Mołotow</label>  </div>
   <div><label><input type="checkbox" name="nades"> Mołotow</label>  </div>
   </div>
   <div class="col">
   <div><label><input type="checkbox" name="nades"> Ogłuszający</label>  </div>
   <div><label><input type="checkbox" name="nades"> Ogłuszający</label>  </div>
   <div><label><input type="checkbox" name="nades"> Ogłuszający</label>  </div>
   </div>
   </fieldset>
   </div>
   
   <div class="row">
   <input type="reset" value="Resetuj">
   </div>
   
   <div class="row">
   <input type="submit" value="Zatwierdź">
   </div>
   
   
   </form>
   
   </section>
   </article>
   
   <aside>
   
   <div id="datepicker"></div>
   
   <div id="clock"></div>
   
   <div id="messages">
     <ul id="messList"></ul>
       <input id="resizable" placeholder="co powinno się znaleźć w kolejnym updacie" type="text">
       <button id="messBut">Wyślij</button>
   
   </div>
   </aside>

</main>

<footer>
Strona została stworzona jako projekt na pierwszy rok studiów i poświęcona jest grze PlayerUnknown's Battlegrounds. <br/>&copy; Wszelkie prawa zastrzeżone.
</footer>

<script src="scripts/mess.js"></script>

<script>
$("#datepicker").datepicker();
</script>

<script>
  $( function() {
    $( "#resizable" ).resizable({
      handles: "se"
    });
  } );
</script>
</body>


</html>