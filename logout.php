<?php
session_start();

require_once 'database/DB.php';
$db=get_db();
	
$result=$db->images->find();
foreach($result as $img)
{
	$db->images->updateOne($img,
		        ['$set'=>['fav'=>'false']]);
}


session_unset();
header('location: index.php');


?>