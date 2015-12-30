<?php
date_default_timezone_set('Europe/Warsaw');
$l = date('l');
switch($l)
{
 case "Monday" : $l ="Poniedziałek"; break;
 case "Tuesday" : $l ="Wtorek"; break;
 case "Wednesday" : $l ="Środa"; break;
 case "Thursday" : $l ="Czwartek"; break;
 case "Friday" : $l ="Piątek"; break;
 case "Saturday" : $l ="Sobota"; break;
 case "Sunday" : $l ="Niedziela"; break;
}
echo $l;
echo ' dnia ';
echo date('j');
echo ' ';
$F = date('F');
switch($F)
{
 case "January" : $F ="Styczeń "; break;
 case "February" : $F ="Luty "; break;
 case "March" : $F ="Marzec "; break;
 case "April" : $F ="Kwiecień "; break;
 case "May" : $F ="Maj "; break;
 case "Juni" : $F ="Czerwiec "; break;
 case "July" : $F ="Lipiec "; break;
 case "August" : $F ="Sierpień "; break;
 case "September" : $F ="Wrzesień "; break;
 case "October" : $F ="Październik "; break;
 case "November" : $F ="Listopad "; break;
 case "December" : $F ="Grudzień "; break;
}
echo $F;
echo date('Y');
echo ' r. ';
echo '<br>';
echo 'Jest to ';
echo date('z');
echo ' dzień roku.';
echo '<br>';
echo 'Do końca miesiąca mamy ';
$koniec_m = date('t')-date('j');
echo $koniec_m;
echo ' dni';
echo '<br>';
echo ' a do końca roku mamy ';
$koniec_r = 365-date('z');
echo $koniec_r;
echo ' dni';
echo '<br>';
echo 'Do matury zostało ';
$matura = 123-date('z');
echo $matura;
?>

