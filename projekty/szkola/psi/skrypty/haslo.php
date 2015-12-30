<?php
//Kod funkcji
function  generujHaslo($dlugosc_hasla  =  8,  $zestaw_znakow  =  'abcdefghijklmnopqrstuvwxyz0123456789')
{
  srand(microtime(true));
  $zakres=strlen($zestaw_znakow);
  for ($i=0;$i<$dlugosc_hasla;$i++)
  {
     --$zakres;
     $haslo.=$zestaw_znakow[$wylosowano=(rand(0,$zakres))];
     $tmp=$zestaw_znakow[$wylosowano];
     @$zestaw_znakow[$wylosowano]=$zestaw_znakow[$zakres];
     @$zestaw_znakow[$zakres]=$tmp;
  }
  return $haslo;
}
echo 'Losowe hasło: '.generujHaslo();
?>

