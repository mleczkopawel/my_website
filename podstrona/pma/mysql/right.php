<?php
        $baza= $_GET['baza'];
        $tabela=$_GET['tabela'];
        $host="localhost";
        $baza= $_GET['baza'];
        error_reporting(0);
        $connect2=new mysqli($host,$_SESSION['user2'],$_SESSION['password2'], $baza);  
        $connect=new mysqli($host,$_SESSION['user2'],$_SESSION['password2']);          
        $conn = mysql_connect($host, $_SESSION['user2'], $_SESSION['password2']) or die ("Nie udało sie połączyć z bazą danych MySQL " . mysql_error());
        mysql_select_db($baza, $conn);
        if ($connect->connect_errno != 0)
        {    
                echo "Nr błędu: ".$connect->connect_errno." ".$connect->connect_error;
                die('<br>Błąd połączenia z bazą danych');
        }
        else
        {      
                $tabela=$_GET['tabela'];
                if(!isset($baza))
                {
                    printf ("MySQL client info: %s\n", mysql_get_client_info());
                    echo "<br>";
                    printf ("MySQL host info: %s\n", mysql_get_host_info());
                    echo "<br>";
                    printf ("MySQL protocol version: %s\n", mysql_get_proto_info());
                    echo "<br>";
                    printf ("MySQL server version: %s\n", mysql_get_server_info());
                    echo '<img src="image/pma.png"></img>';
                }
                else
                {
                    if(!isset($tabela))
                    {
                        include 'dbase.php';
                    }
                    else
                    {
                       include 'table.php';
                    }
                }
        }
    