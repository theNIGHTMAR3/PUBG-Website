$actualwidth=80; //initial width of the image
$adjustwidth=60; //after enlarge image adjust the other images width
$endwidth=500; //end width of the image
var tt; //timer
$delay=100; //speed 
$arr=["img1","img2","img3","img4","img5"];  
$arr1=[]; 
Array.prototype.inArray = function (value)
{
var i;
for (i=0; i < $(this).length; i++) 
{
        if ($(this[i]) == value) 
        {
        return true;
        }
}
return false;
};

function enlargeimg(iid)
{ 
      $arr1.splice(0,$arr1.length); 
      $actualwidth=$actualwidth+60;
      if($actualwidth < $endwidth)    //check with end width
      {  
        for(var i=1;i<=$arr.length;i++)
        {
          if($arr[i]==iid) {      
 
          }
         else
         {
            if($arr.inArray($arr[i]))
                $arr1.push($arr[i]);
         }
         }    
          $("#"+iid).css('width',$actualwidth+'px');
          for(var i=0;i<$arr1.length;i++)
          {
             $('#'+$arr1[i]).css('width',$adjustwidth+'px');
          }
          tt=setTimeout("enlargeimg('"+iid+"')",$delay);
       }

       if($actualwidth > $endwidth) //check with end width
       {
         actualimg();
       }
 }
function actualimg()
{
     clearTimeout(tt);
     $actualwidth=80;
     for(var i=0;i<$arr.length;i++)
     {
        $('#'+$arr[i]).css('width',$actualwidth+'px');
     }
}

