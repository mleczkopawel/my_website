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
        $pdo->query("SET NAMES 'utf8'");//TO MUSI BYĆ W WIELU MIEJSCACH BO INACZEJ UCIEKNĄ ZNAKI POLSKIE...
        $wynik = $pdo -> query("SELECT * FROM text WHERE id_text=3");
        while($wiersz=$wynik->fetchObject())
        {
         // echo $wiersz->id_text."<br>";
          echo $wiersz->text."<br>";            
        }
      }  
      include '../layout/polecane.php';
      include '../layout/footer.php';
    ?>
  </body>
</html>
