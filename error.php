<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    error_reporting(0);
    include 'layout/head.php';
    ?>
  </head>
  <body>  
   <?php
        include 'layout/menu.php';
        include 'layout/slide/main.php';
      ?>
       <div class="row">
        <div class="col-lg-4">
        </div>   
        <div class="col-lg-4">
          <p>
          <h1>BEEP! ZŁE DANE!</h1>
          <a class="btn btn-lg btn-danger" href='index.php'>Powrót na stronę logowania </a>
          </p>
        </div>
       </div>
      <?php
        include 'layout/polecane.php';
        include 'layout/footer.php';
      ?>
  </body>
</html>
