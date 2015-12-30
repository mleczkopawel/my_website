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
    <p class="centt"><img class="centt" src="../../image/zmt_dokumentacja.jpg" alt="Brak obrazka"><br><br>
    <a class="btn btn-lg btn-primary" type="submit" href="../../file/dok_setup.exe">Pobierz</a></p>
    <?php
      }
      include '../layout/polecane.php';
      include '../layout/footer.php';
    ?>
  </body>
</html>
