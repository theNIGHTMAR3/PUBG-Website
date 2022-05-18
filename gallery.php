<?php
	require_once 'database/DB.php';
	use MongoDB\BSON\ObjectID;
    //ilość plików w folderze  - $i
	$path = 'images/mini';
	$folder=opendir($path);
	//var_dump($folder);
	$i=0;
	while($file = readdir($folder))
	{
		if($file<>'.' && $file<>'..' && !is_dir($path.$file))
			$i++;
	}
	closedir($folder);

	$dir=glob('images/mini/{*.png,*.jpg}',GLOB_BRACE);
	$db=get_db();

	$page=isset($_GET['page']) ? (int) $_GET['page']:1;
	$pageSize=6;
	$skip=($page-1)*$pageSize;
	$next=($page+1);
	$prev=($page-1);
	$opts=[
		'skip'=>($page-1)*$pageSize,
		'limit'=>$pageSize
	];
	$total=(count($dir));

	$onlyFav=['fav'=>'true'];

	$optsFav=[
		'skip'=>($page-1)*$pageSize,
		'limit'=>$pageSize
	];

	$cursor=$db->images->find([],$opts);
	$cursorFav=$db->images->find($onlyFav,$opts);
	$onlyFavArray=$db->images->find($onlyFav);
	$imagesOnPage=array();
	$imagesOnPageFav=array();
	$favArray=array();


	foreach($onlyFavArray as $r){
		$favArray[]=$r['name'];
	}
	foreach($cursor as $r){
		$imagesOnPage[]=$r['name'];
	}

	foreach($cursorFav as $r){
		$imagesOnPageFav[]=$r['name'];
	}
	//var_dump($imagesOnPageFav);


	$totalFav=count($favArray);

	
	foreach ($dir as $value):    //pętla po wszystkich zdjęciach w folderze
		$flag=true;
		$flag2=true;
		$flag3=false;
		$flag4=false;
		$path=explode('_',$value);
		$name=$path[1];
		$img_mark='images/watermark/mark_'.$name;
		$result=$db->images->findOne(['name'=>$name]);

		$id_temp=(string)$result['_id'];

		//var_dump($id_temp);

		if(isset($_POST[$id_temp]) && !isset($_SESSION['fav']))
		{
		    $updateResult=$db->images->updateOne($result,
		        ['$set'=>['fav'=>'true']]);
		}

		if(isset($_POST[$id_temp]) && isset($_SESSION['fav']))
		{
		    $updateResult=$db->images->updateOne($result,
		        ['$set'=>['fav'=>'false']]);
			echo("<meta http-equiv='refresh' content='1'>");
		}

		//var_dump($result['name']);


		foreach($imagesOnPage as $img) //strony w galerii
		{
		   if( $result['name']==$img)
		   $flag3=true;
		}

		foreach($imagesOnPageFav as $img) //strony w ulubionych
		{
		   if( $result['name']==$img)
		   $flag4=true;
		}


		if(($result['mode']=='private') && (!isset($_SESSION['loggedin']) || $_SESSION['login']!=$result['author']))
		$flag=false;

		$id=(string)$result['_id'];

		if($flag==true && $flag3==true && !isset($_SESSION['fav'])): //widok galerii
	?>

		<figure class="gallery">
			<a href="<?=$img_mark;?>" data-fancybox="images" data-caption="My caption">
				<img src="<?=$value;?>" alt="" />
			</a>
				<figcaption><?=$result['title'];?><br/><?=$result['author'];?>
					<br/> <label for="<?=$result['name'];?>">Zaznacz zdjecie: </label>
					<input type="checkbox" name="<?=$id;?>" id="<?=$result['name'];?>" <?php if($result['fav']=='true'){ echo 'checked';}?>/>
				</figcaption>
		</figure>
		<?php
		elseif(isset($_SESSION['fav']) && $flag==true && $flag4==true): //widok ulubionych

			if($result['fav']=='false')
			$flag2=false;
			if($flag2==true):
				
		 ?> 

		<figure class="gallery">
			<a href="<?=$img_mark;?>" data-fancybox="images" data-caption="My caption">
				<img src="<?=$value;?>" alt="" />
			</a>
				<figcaption><?=$result['title'];?><br/><?=$result['author'];?>
					<br/> <label for="<?=$result['name'];?>">Zaznacz zdjecie: </label>
					<input type="checkbox" name="<?=$id;?>" id="<?=$result['name'];?>"/>
				</figcaption>
		</figure>
		<?php endif; ?>

	<?php endif; ?>
	<?php endforeach;?>

	
 