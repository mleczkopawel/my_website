 <?php
if(empty($_POST['submit'])){
?>
<form action="NAZWA_STRONY.php" method="post"> <!--nazwa strony na której znajduje się formularz-->
Wybierz gdzie wysłać:<br />
<select name="odbiorca" style="width:300px;">
    <option>pawi12ster@gmail.com</option>
    <option>adres@email_2</option>
    <option>adres@email_3</option>
</select>
<br />
Imię i Nazwisko:<br />
<input type="text" name="imienazwisko" style="width:300px;"/><br />
E-Mail:<br />
<input type="text" name="email" style="width:300px;"/><br />
Treść wiadomości:<br />
<textarea name="trescwiadomosci" cols="30" rows="6" style="width:300px;"></textarea><br />
<input type="submit" name="submit" value="Wyślij formularz"/> 
<input type="reset" value="Wyczyść"/>
</form>
<?php
/*sprawdzenie wypełnienia wszystkich pól*/
}elseif(!empty($_POST['imienazwisko']) && !empty($_POST['email']) && !empty($_POST['trescwiadomosci'])){
/* Funkcja sprawdzająca poprawność E-Maila */
function SprawdzEmail($email) {
 if (!eregi("^[_.0-9a-z-]+@([0-9a-z][0-9a-z-]+.)+[a-z]{2,4}$" , $email)){
  return false;
 }
 return true;
}
if(SprawdzEmail($_POST['email'])){
/* Tworzymy szkielet wysyłanej wiadomości */
$adresemail=$_POST['odbiorca'];
$ip=$_SERVER['REMOTE_ADDR'];
/* Wybierz kodowanie znaków usuwając // */
//$charset = 'iso-8859-2';
//$charset = 'utf-8';
$host=gethostbyaddr($_SERVER['REMOTE_ADDR']);
$wiadomosc="Od: $_POST[imienazwisko] ($_POST[email])\nIP: $ip, HOST: $host\n\n$_POST[trescwiadomosci]";
$nadawca="From: $_POST[email]";
@mail($adresemail, "Formularz kontaktowy z www.dawajda.pl", "$wiadomosc", "$nadawca");
echo "<span style=\"color: #00D800; font-weight: bold; \">Dziękujemy, formularz został wysłany.</span>";
}else{ echo "<span style=\"color: #FF0000; text-align: center; font-weight: bold;\">Wprowadzony adres E-Mail jest niepoprawny!!!</span>"; }
}else{ echo "<span style=\"color: #FF0000; text-align: center; font-weight: bold;\">Cofnij i wypełnij wszystkie pola formularza!!!</span>"; }
?>