  <?php  
	
	  //nowe wejœcie
	if($_SESSION==null || !isset($_SESSION['loggedin'])): ?> 
	   <div class="logbar">
		   <form action="login.php" method="post">
				<input type="text" name="login" placeholder="login"/>
				<input type="password" name="pass" placeholder="has³o"/>
				<br/>
				<input type="submit" value="Zaloguj siê"/>
		   </form>
	   </div>
	<div class="logbar">
		<a class="link" href="registerView.php"><strong> Zarejestruj siê</strong></a>
	</div>
	   <?php
	   //udane logowanie
   elseif(isset($_SESSION['authentication']) && (!isset($_SESSION['error']))): $_SESSION['loggedin']=true; ?>

		<div class="logbar">
			Jesteœ zalogowany jako <?php echo $_SESSION['login'];?>
		</div>
		<div class="logbar">
			<a class="link" href="logout.php">Wyloguj siê</a>
		</div>

	   <?php else:  //nieudane logowanie
	   ?>
	<div class="logbar">
		<form action="login.php" method="post">
			<input type="text" name="login" placeholder="login"/>
			<input type="password" name="pass" placeholder="has³o"/>
			<br/>
			<input type="submit" value="Zaloguj siê"/>
		</form>
		<?php echo $_SESSION['error'];?>
	</div>
	<div class="logbar">
		<a class="link" href="registerView.php"> Zarejestruj siê</a>
	</div>
	<?php endif;	?>
	   
   
   <div class="logbar">
		<a class="link" href="galleryView.php"><strong>Galeria zdjêæ</strong></a>
	</div>