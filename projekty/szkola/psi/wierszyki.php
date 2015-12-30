<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
<?php
    include"head.php";
?>
</head>
<body>
<?php 
    include "../layout_d/menu_d.php";
    include "../layout_d/header_d.php";
    include "../layout_d/up_d.php";
?>
    <h2 class="art-postheader">Wierszyki</h2>                              
    <div class="art-postcontent art-postcontent-0 clearfix"><p><br/></p></div>
    <fieldset>
    <legend>Losowy wiersz</legend>          
        <?php 
            $wiersz = array("wierszyki/1.txt","wierszyki/2.txt","wierszyki/3.txt","wierszyki/4.txt","wierszyki/5.txt","wierszyki/6.txt","wierszyki/7.txt");
            shuffle($wiersz);        
            $file = fopen($wiersz[1], "r");
            while (!feof($file))
                {
                    $wiersz=fgets($file,1024);
                    echo $wiersz. "<br/>";
                }
        ?>        
    </fieldset> 
               
<?php
    include "../layout_d/down_d.php";
    include "../layout_d/footer_d.php";
?>
</div>


</body></html>