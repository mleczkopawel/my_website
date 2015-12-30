<?php
	session_start();
	if ($_SESSION['auth'] == TRUE && !isset($_GET['logout'])) 
	{
		$_SESSION['user'] = ' ';
		$_SESSION['auth'] == FALSE;
		header("Location:../../index.php");
		session_destroy();
	}
?>