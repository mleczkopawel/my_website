<?php
  session_start();
  include 'db.php';
  //funkcja sprawdzająca poprawność rejestracji
  function check($n,$s,$l,$p,$vp,$e,$ve) 
  {
    include 'db.php';
    $wynik = $pdo -> query("SELECT COUNT(*) FROM user WHERE login='$l' LIMIT 1");
    $wynik->execute();
    $check1=$wynik->fetch();
    $wynik = $pdo -> query("SELECT COUNT(*) FROM user WHERE login='$e' LIMIT 1");
    $wynik -> execute();
    $check2 = $wynik -> fetch();
    $check3 = strlen($l);
    $check4 = strlen($p);

    $k="";
    if(!$n || !$s || !$l || !$e || !$p || !$vp || !$ve)
      $k.="Musisz wypełnić wszystkie pola<br>";
    if($check1[0]>=1)
      $k.="Podany login już istnieje<br>";
    if($check2[0]>=1)
      $k.="Podany email już istnieje<br>";
    if($e!=$ve)
      $k.="Podane adresy email się różnią<br>";
    if($p!=$vp)
      $komunikaty.="Podane hasła się różnią<br>";
    if($check3<5)
      $komunikaty.="Login musi zawierać min. 5 znaków<br>";
    if($check4<6)
      $komunikaty.="Hasło musi zawierać min. 6 znaków<br>";
    if($check5==true)
      $komunikaty.="aaaaaaa";

    return $k;
  }
  if ($_POST['register'])
  {   
    $name = trim($_POST['name']);
    $surname = trim($_POST['surname']);
    $login = trim($_POST['login']);  
    $password = trim($_POST['password']);
    $vpassword = trim($_POST['vpassword']);
    $email = trim($_POST['email']);
    $vemail = trim($_POST['vemail']);

    $komunikaty=check($name,$surname,$login,$password,$vpassword,$email,$vemail);

    if($komunikaty)
      include '../er_reg.php';
    else
    {
      $login = str_replace( ' ','',$login);
      $password = sha1(md5($password));
      $add=$pdo->prepare("INSERT INTO user VALUES(null,:name,:surname,:login,:email,:password)");
      $add->bindValue(":name",$name, PDO::PARAM_STR);
      $add->bindValue(":surname",$surname, PDO::PARAM_STR);
      $add->bindValue(":login",$login, PDO::PARAM_STR);
      $add->bindValue(":email",$email, PDO::PARAM_STR);
      $add->bindValue(":password",$password, PDO::PARAM_STR);
      $add->execute();
      header("Location:../../index.php");
    }
  }
?>