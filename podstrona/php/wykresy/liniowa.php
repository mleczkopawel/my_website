<?php
 $obrazek=imagecreatetruecolor(600, 600);
 $white=imagecolorallocate($obrazek, 255, 255, 255);
 $black=  imagecolorallocate($obrazek, 0, 0, 0);
 $red=imagecolorallocate($obrazek, 255, 0, 0); 
 $green=imagecolorallocate($obrazek, 0, 255, 0);  
 $blue=imagecolorallocate($obrazek, 0, 0, 255);  
 imagefilledrectangle($obrazek, 0, 0, 600, 600, $black);
 imageline($obrazek,300,0,300,600,$white);
 imageline($obrazek,0,300,600,300,$white);
  for ($i=0;$i<=600;$i=$i+20)
 {
  imageline($obrazek,$i,297,$i,303,$white);
  imageline($obrazek,297,$i,303,$i,$white);
 } 
  for ($i=0;$i<=600;$i++)
 {
     imagesetpixel($obrazek, $i, (600-$i), $red);
 } 
 header ("Content-type:image/jpeg");
 imagejpeg($obrazek);
 imagedestroy($obrazek);