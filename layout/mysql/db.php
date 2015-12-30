<?php	
	try
	{
		//$pdo=new PDO('mysql:host=mysql.cba.pl;dbname=mleczkopawel_cba_pl;','adminpadmin','tracer12',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
//		$pdo=new PDO('mysql:host=mysql.hostinger.pl;dbname=u133897514_baaza;','u133897514_padmi','tracer12',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
		$pdo=new PDO('mysql:host=localhost;dbname=dane','root','zaq');
		$pdo->query("SET NAMES 'utf8'");
		$pdo->query("SET CHARSET 'utf8'");
		$pdo->query("SET NAMES 'utf8' COLLATE 'utf8_unicode_ci'");
	}
	catch(PDOException $e)
	{
		echo "połączenie nie zostało utworzone: ".$e->getMessage();
	}