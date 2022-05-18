  <?php  
	
	  //nowe wej�cie
	if($_SESSION==null || !isset($_SESSION['loggedin'])): ?> 
	   <div class="logbar">
		   <form action="login.php" method="post">
				<input type="text" name="login" placeholder="login"/>
				<input type="password" name="pass" placeholder="has�o"/>
				<br/>
				<input type="submit" value="Zaloguj si�"/>
		   </form>
	   </div>
	<div class="logbar">
		<a class="link" href="registerView.php"><strong> Zarejestruj si�</strong></a>
	</div>
	   <?php
	   //udane logowanie
   elseif(isset($_SESSION['authentication']) && (!isset($_SESSION['error']))): $_SESSION['loggedin']=true; ?>

		<div class="logbar">
			Jeste� zalogowany jako <?php echo $_SESSION['login'];?>
		</div>
		<div class="logbar">
			<a class="link" href="logout.php">Wyloguj si�</a>
		</div>

	   <?php else:  //nieudane logowanie
	   ?>
	<div class="logbar">
		<form action="login.php" method="post">
			<input type="text" name="login" placeholder="login"/>
			<input type="password" name="pass" placeholder="has�o"/>
			<br/>
			<input type="submit" value="Zaloguj si�"/>
		</form>
		<?php echo $_SESSION['error'];?>
	</div>
	<div class="logbar">
		<a class="link" href="registerView.php"> Zarejestruj si�</a>
	</div>
	<?php endif;	?>
	   
   
   <div class="logbar">
		<a class="link" href="galleryView.php"><strong>Galeria zdj��</strong></a>
	</div>