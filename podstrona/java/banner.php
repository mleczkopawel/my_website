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
      <hr class="featurette-divider">
        <applet code="pierwszy.class" codebase="classes" width=600 height=370></applet> 
      <?php
            }
        include '../layout/polecane.php';
        include '../layout/footer.php';
      ?>
  </body>
</html>