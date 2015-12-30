<?php
error_reporting(0);
session_start();
$host = 'localhost';
$user = strip_tags(trim($_GET['login2']));
$password = strip_tags(trim($_GET['password2']));

$connect=new PDO("mysql:host=$host",$user,$password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
if(!empty($user))
{
	if(!empty($password))
	{
		if($connect->connect_errno != 0)
		{	
    		echo '<div class="error"><p class="er"><b>#'.$connect->connect_errno."</b> Nie udało się zalogować na serwer MySQL </p></div>";
    		include 'error.php';
    		die(); 
		}
		else
		{
    		echo '<br>Połączyłeś się z bazą danych';
		    $_SESSION['user2'] = $user;
		    $_SESSION['password2'] = $password;
		    $_SESSION['auth2'] = TRUE;
		    header("Location:../mysql.php");  
		}
	}
 	else 
 	{
    	include 'error.php';
	}
}
else 
{
   	include 'error.php';
}
