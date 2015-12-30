<!DOCTYPE html>
<html lang="en">
  <head>
      <?php
        include '../layout/head.php';
        require_once 'db.php';
      ?>
  </head>
  <body> 
    <?php
        include '../layout/menu.php';
        include '../layout/slide/main.php';
        include '../layout/hide.php';
    ?>   
   <div class="c">     
    <?php
        if(isset($_SESSION['login']))
            {    
                echo "<b><h1>Cześć, ".$_SESSION['login']."!</h1></b><br>";
                echo '<a href="skrypty/logout.php"><input class="btn btn-lg btn-primary" type="submit" value="Wyloguj się" name="logout"></a>';
                //treść na stronie
                include 'sesje.inc';
            }
        elseif (!isset($_POST['login']) && !isset($_POST['password']) && $_SESSION['auth'] == FALSE)
                {
    ?>
    <form action="../../layout/mysql/logowanie.php" method="post" name="logowanie">
          Login: <input type="text" name="login" /><br />
          Hasło: <input type="password" name="password" />
          <input type="submit" name="zaloguj" value="Zaloguj" /> 
    </form>
   </div>    
      <?php
                }
        include '../layout/polecane.php';
        include '../layout/footer.php';
      ?>
  </body>
</html>  