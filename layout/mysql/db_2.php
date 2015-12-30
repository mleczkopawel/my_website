<?php
	$dbhost = 'localhost'; 	
	$dblogin = 'root';
	$dbpass = 'zaq';
	$dbselect = 'dane';
	mysql_connect($dbhost,$dblogin,$dbpass,$dbselect);
	mysql_select_db($dbselect) or die("Błąd przy wyborze bazy danych");
	mysql_query("SET CHARACTER SET UTF8");