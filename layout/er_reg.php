<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    include '../../podstrona/layout/head.php';
    ?>
  </head>
  <body>  
   <?php
        include '../../podstrona/layout/menu.php';
        include '../../podstrona/layout/slide/main.php';
      ?>
       <div class="row">
        <div class="col-lg-4">
        </div>   
        <div class="col-lg-4">
          <p>
              <?php
                echo '<b>Rejestracja nie powiodła się, popraw następujące błędy:</b><br>'.$komunikaty.'<br>';
              ?>
              <a class="btn btn-lg btn-danger" href='../../register.php'>Powrót na stronę rejestracji</a>    
          </p>
        </div>
       </div>
      <?php
        include '../../podstrona/layout/polecane.php';
        include '../../podstrona/layout/footer.php';
      ?>
  </body>
</html>
