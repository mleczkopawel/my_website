<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
        error_reporting(0);
        include 'layout/head.php';
        function form(){
          echo '
            <form action="layout/mysql/register.php" method="post" name="register">
                <label for="name" class="in co1"> Imię: </label><input class="in co21" name="name" type="text" ><br>
                <label for="surname" class="in co1"> Nazwisko: </label><input class="in co22" name="surname" type="text" ><br>
                <label for="login" class="in co1"> Login: </label><input class="in co23" name="login" type="text" ><br>
                <label for="password" class="in co1"> Hasło: </label><input class="in co24" name="password" type="password" ><br>
                <label for="vpassword" class="in co1"> Powtórz hasło: </label><input class="in co25" name="vpassword" type="password" ><br>
                <label for="email" class="in co1"> E-mail: </label><input class="in co26" name="email" type="email"><br>
                <label for="vemail" class="in co1"> Powtórz e-mail: </label><input class="in co27" name="vemail" type="email"><br>
                <p><input class="btn btn-sm btn-primary" type="submit" value="Zarejestruj" name="register"></p>  
            </form>
          ';
        }
    ?>
  </head>
  <body>  
   <?php
        include 'layout/menu.php';
        include 'layout/slide/main.php';
      ?>
       <div class="row">
          <div class="col-lg-12">
            <h2>Zarejestruj się</h2>
            <?php
              form();
            ?>
        </div>
       </div>             
      <?php           
        include 'layout/polecane.php';
        include 'layout/footer.php';
      ?>
  </body>
</html>

