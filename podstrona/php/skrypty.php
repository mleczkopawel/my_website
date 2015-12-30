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
        echo '<div class="c">';    
        include"skrypty/data.php";
        echo '<hr>';
        include"skrypty/godz.php";
        echo '<hr>';
        include"skrypty/godz2.php";    
        echo '<hr>';
        include"skrypty/kalendarz.php";
        echo '<hr>';
        include"skrypty/mod.php";
        echo '<hr>';
        include"skrypty/mail.php";
        echo '<hr>';
        include"skrypty/obrazek.php";
        echo '<hr>';
        include"skrypty/haslo.php";
        echo '<hr>';
        include"skrypty/trzy_obrazki.php";
        echo '</div>'
      ?>
      <hr class="featurette-divider">
      <?php
            }
        include '../layout/polecane.php';
        include '../layout/footer.php';
      ?>
  </body>
</html>
