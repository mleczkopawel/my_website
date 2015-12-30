<?php
    error_reporting(0);
    $host="localhost";
    $user="root";
    $password="zst";
    $database="auta";
    $connect=new mysqli($host,$user,$password,$database);
    if($connect->connect_errno!=0)
    {   
        echo"Nr błędu: ".$connect->cennect_errno." ".$connect->connect_errno;
        die(" błąd połączenia z bazą danych");
    }
    else
    {
        echo"<br>Połączyłeś się z bazą danych";
    }
    echo " <br><br> Ciąg dalszy skryptu PHP";
