<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      include 'layout/head.php';
      error_reporting(0);
    ?>
  </head>
  <body>  
    <?php
      include 'layout/menu.php';  
      include 'layout/slide/main.php';
      if ($_SESSION['auth'] == false)  
        {
          echo '<meta http-equiv="refresh" content="1; URL=index.php">';
          echo '<br><br><br><br><p class="col-lg-12";"><strong>Próba nieautoryzowanego dostępu...</strong><br>trwa przenoszenie do formularza logowania<p></p>';
        }
      else
        {   
          // echo '<div class="container marketing">';
          include 'layout/mysql/user.php';
        }
      include 'layout/polecane.php';
      include 'layout/footer.php';
    ?>
  </body>
</html>
