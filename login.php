<?php
session_start();

if(!isset($_POST['login']) && !isset($_POST['pass']))
{
	header('Location: index.php');
	exit();
}

function bladLogowania()
{
		$_SESSION['authentication']=true;
		$_SESSION['error']='<div class="error">Nieprawidlowy login lub haslo</div>';

		//var_dump($_SESSION);

		header('Location: index.php');
		exit();
}
	require_once 'database/DB.php';

	$givenLogin = $_POST['login'];
	$givenPass = $_POST['pass'];
	$loggedUser=null;

if(isset($_POST['login']) && $givenLogin!=null && $givenPass!=null)
{	
	$db=get_db();
	$users=$db->users;

	$user=[
		'login'=>$givenLogin,
	];
	
	$result=$users->find($user);

	$storedLogin=null;
	$storedPass=null;

	foreach($result as $element)
	{
		$storedLogin=$element['login'];
		$storedPass=$element['password'];
	}


	if($givenLogin==$storedLogin && password_verify($givenPass,$storedPass)==true)
	{
		$loggedUser=$users->findOne($user);
		$_SESSION['login']=$loggedUser['login'];
		$_SESSION['_id']=$loggedUser['_id'];
		$_SESSION['paswword']=$loggedUser['password'];
		$_SESSION['email']=$loggedUser['email'];
		$_SESSION['authentication']=true;
		$_SESSION['error']=null;
		$_SESSION['loggedin']=true;
	
		/*var_dump($_SESSION['authentication']);
		echo '<br/>';
		var_dump($_SESSION['error']);
		*/
		//var_dump($_SESSION);
		header('Location: index.php');
		exit();
	}
	else  
	{	
		bladLogowania();
		exit();
	}
	
}
else 
{
	bladLogowania();
	exit();
}
?>