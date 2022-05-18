<?php
session_start();

require_once 'database/DB.php';

if(isset($_POST['regLogin']))
{
	$flag=true;

	//sprawdzanie loginu
	$login=$_POST['regLogin'];
	$db=get_db();
	
	$search=$db->users->findOne(['login'=>$login]);

	if($search!=null)
	{	
		$flag=false;
		$_SESSION['e_login']='login jest juz zajety';
	}

	if((strlen($login)<3) || (strlen($login)>20))
	{
		$flag=false;
		$_SESSION['e_login']='login musi posiadac od 3 do 20 znakow';
	}
	if(ctype_alnum($login)==false)
	{
		$flag=false;
		$_SESSION['e_login']='login moze skladac sie z liter i cyfr';
	}

	//sprawdzenie emailu
	$email=$_POST['regEmail'];
	$emailB=filter_var($email,FILTER_SANITIZE_EMAIL);

	$searchEmail=$db->users->findOne(['email'=>$emailB]);

	if($searchEmail!=null)
	{	
		$flag=false;
		$_SESSION['e_email']='email jest juz zajety';
	}
	if(filter_var($emailB,FILTER_VALIDATE_EMAIL)==false || ($emailB!=$email))
	{
		$flag=false;
		$_SESSION['e_email']="podaj poprawny email";
	}

	//sprawdzenie hase³
	$pass1=$_POST['regPass1'];
	$pass2=$_POST['regPass2'];

	if((strlen($pass1)<5 || strlen($pass1)>20))
	{
		$flag=false;
		$_SESSION['e_pass']="haslo musi posiadac od 5 do 20 znakow";
	}
	if($pass1!=$pass2)
	{
		$flag=false;
		$_SESSION['e_pass']="podane hasla nie sa identyczne";
	}

	$pass_hash=password_hash($pass1,PASSWORD_DEFAULT);

	if($flag==true)
	{
		$users=$db->users;
		$newUser=[
			'login'=>$login,
			'email'=>$emailB,
			'password'=>$pass_hash
		];

		$db->users->insertOne($newUser);
		
		$_SESSION['registered']=true;
		header('Location: registerView.php');
		exit();
	}
	else 
	{
		//echo 'blad rejestracji';
		header('Location: registerView.php');
		exit();
	}
}


?>