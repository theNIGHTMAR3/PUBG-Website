<?php

	require 'vendor/autoload.php';
	
	use MongoDB\BSON\objectId;

	
	function get_db()
	{
		$mongo = new MongoDB\Client(
        "mongodb://127.0.0.1:27017/wai",
        [
          'username' => 'wai_web',
          'password' => 'w@i_w3b'
        ]);
	  $db=$mongo->wai;
	  return $db;
	}
	
	
//	$db=get_db();

	/*
	foreach($db->listCollections() as $coll)
	{
		var_dump($coll);
	}*/
	
	//$elements=$db->images->find();


	
	/*foreach($elements as $element)
	{
		echo $element['_id'].'<br/>';
		echo $element['name'].'<br/>';
		echo $element['title'].'<br/>';
		echo $element['author'].'<br/>';
		echo $element['mode'].'<br/>';
		echo $element['fav'].'<br/>';
		echo '<br/>';
	}*/

	//$result=$db->images->deleteOne(['title'=>'NIGHTMARE']);



	/*
	$result=$db->users->findOne(['login'=>'costam']);
	echo '<br/>';
	echo '<br/>';
	echo '<br/>';

		echo $result['_id'].'<br/>';
		echo $result['login'].'<br/>';
		echo $result['password'].'<br/>';
		echo $result['email'].'<br/>';
		echo '<br/>';
/*

	if($result!=null)
	echo 'login zajety';

	else echo 'login wolny';
	
	*/
?>