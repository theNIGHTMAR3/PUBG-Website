<?php
require_once 'database/DB.php';
    session_start();
      if(isset($_POST["delete"])){
        echo $_POST["delete"];
        unlink("images/".$_POST["delete"]);
      }
 if(isset($_FILES['image'])){
       $errors= array();
           $file_name = implode($_FILES['image']['name']);
           $file_size =implode($_FILES['image']['size']);
           $file_tmp =implode($_FILES['image']['tmp_name']); 
           $file_type=implode($_FILES['image']['type']);

    $extensions= array("jpg","png");
    $temp_array=explode('.',$file_name);
      $file_ext=end($temp_array);
    //var_dump($_POST['watermark']);echo '<br/>';
           $watermark=$_POST['watermark'];
           if(in_array($file_ext,$extensions)=== false){
              $errors['ext']="Rozszerzenie niedozwolone.";
           } 
           if($file_size>1048576 || $file_size==0){
              $errors['size']='Plik nie moze byc wiekszy niz 1 MB.';
           } 
           if(empty($watermark) || $watermark==NULL){
          // echo 'cos';
              $errors['mark']='Nie podano znaku wodnego.';
           }

		   //var_dump($file_name); echo '<br/>';
		   //var_dump($file_size);echo '<br/>';
		   //var_dump($file_tmp);echo '<br/>';
		   //var_dump($file_type);echo '<br/>';
		   //var_dump($file_ext);echo '<br/>';
		   //var_dump($errors);echo '<br/>';
		 
   if(empty($errors)==true){
         $file_mark=$file_tmp;
         $dir=__DIR__.'/images/original/'.$file_name;

        move_uploaded_file($file_tmp,$dir);
    
     // echo "Success<br/>";
      unset($errors);

      $dir2=__DIR__.'/images/watermark/'.'mark_'.$file_name;
      $dir3=__DIR__.'/images/mini/'.'mini_'.$file_name;
        
        file_put_contents($dir2,file_get_contents($dir));

        if($file_ext=='jpg')
            $image=imagecreatefromjpeg($dir2);
        else $image=imagecreatefrompng($dir2);

        $width=imagesx($image);
        $height=imagesy($image);

        $width_mini = 200; 
        $height_mini = 125;
        $img_mini = imagecreatetruecolor($width_mini, $height_mini);

        imagecopyresampled($img_mini, $image, 0, 0, 0, 0, $width_mini , $height_mini, $width  , $height);

        if($file_ext=='jpg') imagejpeg($img_mini,$dir3);
       else imagepng($img_mini,$dir3);


        $textcolor=imagecolorallocate($image, 169,169,169);
        $font='styles/arial.ttf';
 
 
       $image_mark=imagettftext($image,60,0,30,120,$textcolor,$font,$_POST['watermark']);

       //var_dump($dir2);
       if($file_ext=='jpg') imagejpeg($image,$dir2);
       else imagepng($image,$dir2);

       $title=$_POST['title'];

       $db=get_db();
       $uploadedImg=[
            'title'=>$_POST['title'],
            'name'=>$file_name,
            'ext'=>$file_ext,
            'mode'=>$_POST['contact'],
            'author'=>$_POST['author'],
            'fav'=>'false',
       ];
       $result=$db->images->findOne(['name'=>$file_name]);

        if($result==NULL)
             $db->images->insertOne($uploadedImg);
        else
            $result2=$db->images->replaceOne($result,$uploadedImg);

       /* $result3=$db->images->find();

        foreach($result3 as $i)
        {
            echo $i['title'].'<br/>';
            echo $i['name'].'<br/>';
            echo $i['author'].'<br/>';
            echo $i['ext'].'<br/>';
            echo $i['mode'].'<br/>';
            echo '<br/>';
        }*/




       imagedestroy($image);
       imagedestroy($img_mini);

       header('Location: uploadView.php');
       exit();
   }
   else{
       if(isset($errors['ext'])) $_SESSION['ext']=$errors['ext'];
       if(isset($errors['size'])) $_SESSION['size']=$errors['size'];
       if(isset($errors['mark'])) $_SESSION['mark']=$errors['mark'];
       header('Location: uploadView.php');
       exit();
   }
 }else
 {
       if(isset($errors['ext'])) $_SESSION['ext']=$errors['ext'];
       if(isset($errors['size'])) $_SESSION['size']=$errors['size'];
       if(isset($errors['mark'])) $_SESSION['mark']=$errors['mark'];
       header('Location: uploadView.php');
       exit();
 }

?>