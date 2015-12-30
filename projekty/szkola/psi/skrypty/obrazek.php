<?PHP

function getBannerName()
{
  $hour = date("G");
  if($hour > 22 || $hour < 4){
    return("images/anvils1.jpg");
  }
  else if($hour >= 4 && $hour < 12){
    return("images/anvils2.jpg");
  }
  else if($hour >= 12 && $hour < 18){
    return("images/anvils3.jpg");
  }
  else if($hour >= 18 && $hour <= 22){
    return("images/anvils4.jpg");
  }
}

$str = "<IMG SRC='". getBannerName() ."'>";
echo($str);
?>

