<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
<?php
    include"head.php";
?>
</head>
<body>
<?php 
    include "../layout_d/menu_d.php";
    include "../layout_d/header_d.php";
    include "../layout_d/up_d.php";
?>    
        <?php
 echo 'Imię: ';            
 $op = strip_tags(mb_strlen($_POST["imie"])); 
 if ($op==0)
 {
     echo ('Nie podałeś swojego imienia');
 }
 else
 {
     echo strip_tags(ucfirst($_POST["imie"]));
     echo ('(').$op.(')znaków/ki)');
 }
 echo ("<br />");
 
 echo 'Drugie imię: ';
 $ol = strip_tags(mb_strlen($_POST["imie2"]));
 if ($ol==0)
 {
     echo ('Nie podałeś swojego drugiego imienia');
 }
 else
 {
     echo strip_tags(ucfirst($_POST["imie2"]));
     echo ('(').$ol.(')znaków/ki)');
 }
 echo ("<br />");
 
 echo 'Nazwisko: ';
 $ok = strip_tags(mb_strlen($_POST["nazwisko"]));
 if ($ok==0)
 {
     echo ('Nie podałeś swojego nazwiska');
 }
 else
 {
 echo strip_tags(ucfirst($_POST["nazwisko"]));
     echo ('(').$ok.(')znaków/ki)');
     
 
 }
 echo ("<br />");
 
 echo 'E-mail: ';
  $mail = mb_strtolower($_POST["email"]);   
   echo strip_tags($mail).('<br />');
 $dzielenie = explode("@", $mail);
 echo ('Nazwa użytkownika: '.$dzielenie[0].('<br />'));
 echo (' Nazwa domeny: '.$dzielenie[1].('<br />'));

 



echo 'Płeć: ';
 echo strip_tags($_POST["plec"]).("<br />");
 
 echo 'Nazwa szkoły: ';
 echo strip_tags(ucwords($_POST["szkola"])).("<br />");
 
 echo 'Województwo: ';
 echo strip_tags($_POST["wojewodztwo"]).("<br />");
 
 echo 'Data urodzenia: ';
 echo strip_tags($_POST["urodzenie"]).("<br />");
 
 echo 'Wiek: ';
 echo strip_tags($_POST["wiek"]).("<br />");
 
 echo 'Pesel: ';
 echo strip_tags($_POST["pesel"]).("<br />");
 
 echo 'Nr. dowodu: ';
 echo strip_tags(mb_strtoupper($_POST["dowod1"]).$_POST["dowod2"]).("<br />");
 
 echo 'REGON: ';
 echo strip_tags($_POST["regon"]).("<br />");
 
 echo 'Ilość wysyłanych sms-ów dziennie: ';
 echo strip_tags($_POST["sms"]).("<br />");
 
 echo 'Gatunek muzyki: ';

 //echo var_dump($_POST["$muzyka[]"]);


foreach($_POST['muzyka'] as $index=>$wartosc){
echo strip_tags($wartosc).', ';
}
if ($wartosc<>"")
{
    echo($_POST["Inne"]);
}
echo ("<br />");
 
 echo 'Uwagi: ';

 


 
 
 
  $uw = mb_strlen($_POST['uwagi'], 'UTF-8'); 
 if ($uw >= 700)
 {
     echo ('Przekroczyԥܠliczb꡺nak󷧩');
     echo ('(').$uw.(')znaków)');
 }
 else
 {
     $zmiana1 = str_replace("Sasza", "...", $_POST['uwagi']);
     $zmiana2 = str_replace("szos٢", "...", $zmiana1);
      echo $zmiana2.("<br />"); 
     echo ('(').$uw.(')znaków/ki)');
 }
 
?>
<?php
    include "../layout_d/down_d.php";
    include "../layout_d/footer_d.php";
?>
</div>


</body></html>