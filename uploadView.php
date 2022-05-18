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
   <h2>Prześlij zdjęcie</h2>
   </header>
   
   <section id="content">

	   <form action="upload.php" method="POST" enctype="multipart/form-data">
			<input type="file" class="custom-file-input"  name="image[]"/><br/><br/>

			Tytuł zdjęcia: <br/>
			<input type="text" placeholder="tytuł" name="title" required/><br/><br/>

			Znak wodny: <br/>
			<input type="text" placeholder="znak wodny" name="watermark"/><br/><br/>
			Autor zdjęcia: <br/>
			<input type="text" 
				   <?php if(isset($_SESSION['loggedin'])) echo 'value="'.$_SESSION['login'].'"'; else echo 'placeholder="autor"' ?>
				     name="author" required/><br/><br/>
			
			<div>
				<input type="radio" id="private" default
				 name="contact" value="private" 
					   <?php if(!isset($_SESSION['loggedin']))
							echo 'disabled'; ?> />
					   
				<label for="private">Zdjęcie prywatne</label>

				<input type="radio" id="public"
				 name="contact" value="public" checked>
				<label for="public">Zdjęcie publiczne</label>
				<br/><br/>
	
			</div>
			<input type="submit" value="Wyślij plik"/>
	   </form>

	   <?php

			if(isset($_SESSION['ext']) || isset($_SESSION['size']) || isset($_SESSION['mark']))
			{
				echo 'Blad: <br/>';
				if(isset($_SESSION['ext'])) 
					{
						echo'<div class="error">'.$_SESSION['ext'].'</		div><br/>';
						unset($_SESSION['ext']);
					}
				if(isset($_SESSION['size'])) 
					{
						echo'<div class="error">'.$_SESSION['size'].'</div><br/>';
						unset($_SESSION['size']);
					}
				if(isset($_SESSION['mark'])) 
					{
						echo'<div class="error">'.$_SESSION['mark'].'</div><br/>';
						unset($_SESSION['mark']);
					}

			}
			else echo '<div class="error" style="color: green;">Pomyslnie przeslano zdjecie</div>';

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
   elseif(isset($_SESSION['authentication']) && (!isset($_SESSION['error']))): $_SESSION['loggedin']=true; ?>

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