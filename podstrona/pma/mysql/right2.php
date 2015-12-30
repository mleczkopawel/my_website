<?php
    $host="localhost";
    $baza= $_GET['baza'];
    error_reporting(E_ALL);
    $connect=new mysqli($host,$_SESSION['user2'],$_SESSION['password2'], $baza);  
    if ($connect->connect_errno != 0)
    {    
        echo "Nr błędu: ".$connect->connect_errno." ".$connect->connect_error;
        die('<br>Błąd połączenia z bazą danych');
    }
    else
    {  
        $tabela=$_GET['tabela'];
        if(!isset($tabela))
        {
            printf ("MySQL client info: %s\n", mysql_get_client_info());
            echo "<br>";
            printf ("MySQL host info: %s\n", mysql_get_host_info());
            echo "<br>";
            printf ("MySQL protocol version: %s\n", mysql_get_proto_info());
            echo "<br>";
            printf ("MySQL server version: %s\n", mysql_get_server_info());
            echo '<img src="../../image/pma.png"></img>';
        }
        else
        {
                $show="SELECT * FROM ".$tabela.";";
                if(($db=$connect->query($show))==TRUE)
                {
                    echo "<table border=1>";
                    echo '<tr>';
                    $result=$connect->query("SHOW FIELDS FROM $tabela");
                    echo "<th class='th'></th>";
                    while($wiersz3=$result->fetch_object())
                    {
                        echo "<th class='th'>$wiersz3->Field</th>";
                    }  
                    $ile=$db->num_rows;
                    $wns=20;
                    //liczba newsow na stronie
                    if (isset($_GET['np'])) 
                    {
                        $num_pages = $_GET['np'];
                    } 
                    else 
                    {
                        if ($ile > $wns) 
                        {
                        $num_pages = ceil ($ile/$wns);
                        } 
                        else 
                        {
                            $num_pages = 1;
                        }
                    }
                    if (isset($_GET['s'])) 
                    {
                        $start = $_GET['s'];
                    } 
                    else 
                    {
                        $start =0;
                    }                  
                    $wynik=$connect->query("SELECT * FROM ".$tabela." LIMIT ".(($start)*$wns).",".$wns);
                    while($wiersz=$wynik->fetch_assoc())
                    {
                        echo "<tr>";
                        echo "<td>Edytuj | Usuń</td>";
                        foreach ($wiersz as $index=>$wartosc)
                        echo "<td>$wartosc</td>";
                        echo "</tr>";
                    }              
                    echo '</tr>';
                    echo "</table>";                                             
                    echo "<center>";
                    $navnum = 7;
                    $i=1;
                    $next=($start+1);
                    $prev=($start-1);
                                if($navnum > $num_pages){
                                    $navnum = $num_pages;
                                }
                                
                                //ten fragment może być trudny do zrozumienia
                                //wyliczane są tu niezbędne dane do prawidłowego zbudowania pętli
                                //zmienne są bardzo opisowę więc nie będę ich tłumaczyć
                                $forstart = $start - floor($navnum/2);
                                $forend = $forstart + $navnum;
                                
                                if($forstart <= 0){ $forstart = 1; }
                                
                                $overend = $num_pages - $forend;
                                
                                if($overend < 0){ $forstart = $forstart + $overend + 1; }
                                
                                //ta linijka jest ponawiana ze względu na to, że $forstart mogła ulec zmianie
                                $forend = $forstart + $navnum;
                    {
                        if ($num_pages > 1) 
                        {
                            $current_page = ($start%$ile+1);  
                            if($current_page == 1)   
                            {
                                echo '<a href="mysql.php?baza='.$baza.'&tabela='.$tabela.'&s=0&np=' . $num_pages . '"></a> ';
                            }                     
                            if ($current_page >1) 
                            {
                                echo '<a href="mysql.php?baza='.$baza.'&tabela='.$tabela.'&s=' . ($start-$i) . '&np=' . $num_pages . '">&laquo;</a> ';
                                echo '...';
                            }
                            for ($i; $i <= $num_pages; $i++) 
                            {
                                if ($i != $current_page) 
                                {
                                    echo '<a href="mysql.php?baza='.$baza.'&tabela='.$tabela.'&s=' . ($i-1) .'&np=' .$num_pages . '">' . $i . '</a> ';
                                } 
                                else
                                {
                                    echo $i . ' ';
                                }
                            }
                            if ($current_page !=$num_pages) 
                            {

                                echo '<a href="mysql.php?baza='.$baza.'&tabela='.$tabela.'&s=' . ($start + 1) .'&np=' . $num_pages .'">&raquo;</a>';
                            }
                        }
                    }
                }
        }
    }

