<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      session_start();
      include '../layout/head.php';
    ?>
  </head>
  <body> 
    <?php
      include '../layout/menu.php';
      include '../layout/slide/main.php';
    ?>   
    <div class="c">     
    <?php
      if(isset($_SESSION['login']))
      {    
        echo "<b><h1>Cześć, ".$_SESSION['uzytkownik']."!</h1></b><br>";
        echo '<a href="skrypty/logout.php"><input class="btn btn-lg btn-primary" type="submit" value="Wyloguj się" name="logout"></a>';
      }
      else
      {
    ?>
    <form action="../layout/logowanie.php" method="post" name="logowanie">
      <label> Login: </label><input name="login" type="text" ><br>
      <label> Hasło: </label><input name="password" type="password" ><br>
      <p><input class="btn btn-lg btn-primary" type="submit" value="Zaloguj" name="logowanie"></p>  
    </form>
    <?php
      }
    ?>
    </div>    
    <?php
      include '../layout/polecane.php';
      include '../layout/footer.php';
    ?>
  </body>
</html>  