<?php
session_start();
  header('Content-type: image/jpeg');
  $text=$_SESSION['secure'];
  
  $font_size=30;
  $image_height=50;
  $image_width=110;
  
  $image=imagecreate($image_width,$image_height);
  
  imagecolorallocate($image,255,255,255);
  $font_color=imagecolorallocate($image,0,0,0);
  
  for($x=1; $x<30; $x++)
  {
      $x1=rand(1,110);
      $y1=rand(1,110);
      $x2=rand(1,110);
      $y2=rand(1,110);
      
      imageline($image,$x1,$y1,$x2,$y2,$font_color);
  }

  
  imagettftext($image,$font_size,0,15 ,30,$font_color, 'calligra.ttf',$text);
  imagejpeg($image);
?>