<?php 
session_start();
$login="user";
$password="pass"; 
if ($_POST['logowanie'])
{
    $login2=strip_tags(trim($_POST['login']));
    $haslo2=strip_tags(trim($_POST['haslo']));
        if(($login2==$login)&&($haslo2==$password))
        {
            $_SESSION['uzytkownik']=$login;
            header("Location:../index.php");
        }
        else
        {
            echo "<p>Podałeś złe dane!";
            echo "<a href='../index.php'>Powrót na stronę logowania </a></p>";
        }
}
