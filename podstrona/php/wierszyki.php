<!DOCTYPE html>
<html lang="en">
  <head>
      <?php
        include '../layout/head.php';
      ?>
  </head>
  <body>  
   <?php
        include '../layout/menu.php';
        include '../layout/slide/main.php';
        if ($_SESSION['auth'] == false)  
            {
            echo '<meta http-equiv="refresh" content="1; URL=../../index.php">';
            echo '<p style="padding-top:10px;"><strong>Próba nieautoryzowanego dostępu...</strong><br>trwa przenoszenie do formularza logowania<p></p>';
            }
        else
            {
    ?>                
    <div class="c">
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
    </div>
    <hr class="featurette-divider">
    <?php
            }
        include '../layout/polecane.php';
        include '../layout/footer.php';
    ?>
  </body>
</html>                 