<?php
	session_start();
	error_reporting(0);
	include '../layout/mysql/db.php';

	echo'    
	<div class="ce">
	<form method="post" name="intext">
      <textarea name="area" cols="200" rows="3"></textarea>
      <p><input class="btn btn-sm btn-primary" type="submit" value="Zapisz" name="intext"></p>  
    </form>
    </div>';

	if ($_POST['intext']) 
	{
		$text = trim($_POST['area']);
	    $add=$pdo->prepare("INSERT INTO text VALUES(null,:texxt)");
        $add->bindValue(":texxt",$text, PDO::PARAM_STR);
        $add->execute();
	}