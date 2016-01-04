<?php
	session_start();
	include 'db.php';
	if ($_POST['intext']) 
	{
		$text = trim($_POST['area']);
	    $add=$pdo->prepare("INSERT INTO text VALUES(null,:texxt)");
        $add->bindValue(":texxt",$text, PDO::PARAM_STR);
        $add->execute();
        header("Location:../../index.php");
	}