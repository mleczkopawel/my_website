<?php
  //funkcja wyświetla przycisk "usuń"
  function del_user()
  {
    echo'
        <form method="post">
          <p><input class="btn btn-sm btn-danger" type="submit" value="Usuń" name="deletea"></p>  
        </form>
      </div>';
  }
  function change()
  {
    echo '
      <div class="col-lg-6">
          <form method="post">
              <label for="name" class="in2 co1">Imię:</label><input class="in2 co21" name="name" type="text" >
              <input class="btn btn-sm btn-primary" type="submit" value="Zmień" name="change_n">
          </form>
          <form method="post">
              <label for="surname" class="in2 co1">Nazwisko:</label><input class="in2 co22" name="surname" type="text" >
              <input class="btn btn-sm btn-primary" type="submit" value="Zmień" name="change_s">
          </form>
          <form method="post">
              <label for="login" class="in2 co1">Login:</label><input class="in2 co23" name="login" type="text" >
              <input class="btn btn-sm btn-primary" type="submit" value="Zmień" name="change_l">
          </form>
          <form method="post">
              <label for="email" class="in2 co1">Email:</label><input class="in2 co29" name="email" type="email" >
              <input class="btn btn-sm btn-primary" type="submit" value="Zmień" name="change_e">
          </form>
          <form method="post">
              <label for="password" class="in2 co1">Hasło:</label><input class="in2 co28" name="password" type="password" >
              <input class="btn btn-sm btn-primary" type="submit" value="Zmień" name="change_p">
          </form>
      </div>
    </div>';
  }
  //wyświetlanie danych użytkownika
  $pdo->query("SET NAMES 'utf8'");//TO MUSI BYĆ W WIELU MIEJSCACH BO INACZEJ UCIEKNĄ ZNAKI POLSKIE...
  $wynik = $pdo -> query("SELECT * FROM user WHERE login='$_SESSION[user]'");
  echo '<div class="row">';
  echo '      <div class="col-lg-6">';
  if ($wynik == false)
  {
    echo '<p>Zapytanie nie zostało wykonane poprawnie!</p>';
    $connect -> close();
  }
  else
  {
    echo "<p class='lead'";
    echo "Twoje Dane: <br>";
    while($wiersz=$wynik->fetchObject())
    {
      echo "Imię: ";
      echo $wiersz->name."<br>";
      echo "Nazwisko: ";
      echo $wiersz->surname."<br>";
      echo "Login: ";
      echo $wiersz->login."<br>";
      echo "E-mail: ";
      echo $wiersz->email."<br>";            
    }
    //usuwanie użytkownika
    del_user();
    if ($_POST['deletea'])
    {
      $wynik->execute();
      $i=$wynik->fetch();
      $wynik=$pdo->query("DELETE FROM user WHERE id_user=$i[0]");
      $_SESSION['auth']=FALSE;
      if ($_SESSION['auth']==FALSE)
        echo '<meta http-equiv="refresh" content="0; URL=index.php">';
    }
    //zmiana danych
    change();
    if ($_POST['change_n'])
    {
      $name = trim($_POST['name']);
      $wynik->execute();
      $i=$wynik->fetch();
      $change=$pdo->prepare("UPDATE user SET name=:name WHERE id_user=$i[0]");
      $change->bindValue(':name',$name, PDO::PARAM_STR);
      $change->execute();
      echo '<meta http-equiv="refresh" content="0; URL=#">';
    }
    if ($_POST['change_s'])
    {
      $surname = trim($_POST['surname']);
      $wynik->execute();
      $i=$wynik->fetch();
      $change=$pdo->prepare("UPDATE user SET surname=:surname WHERE id_user=$i[0]");
      $change->bindValue(':surname',$surname, PDO::PARAM_STR);
      $change->execute();
      echo '<meta http-equiv="refresh" content="0; URL=#">';
    }
    if ($_POST['change_l'])
    {
      $login = trim($_POST['login']);
      $wynik->execute();
      $i=$wynik->fetch();
      $change=$pdo->prepare("UPDATE user SET login=:login WHERE id_user=$i[0]");
      $change->bindValue(':login',$login, PDO::PARAM_STR);
      $change->execute();
      echo '<meta http-equiv="refresh" content="0; URL=#">';
    }
    if ($_POST['change_e'])
    {
      $email = trim($_POST['email']);
      $wynik->execute();
      $i=$wynik->fetch();
      $change=$pdo->prepare("UPDATE user SET email=:email WHERE id_user=$i[0]");
      $change->bindValue(':email',$email, PDO::PARAM_STR);
      $change->execute();
      echo '<meta http-equiv="refresh" content="0; URL=#">';
    }
        if ($_POST['change_p'])
    {
      $password = trim($_POST['password']);
      $wynik->execute();
      $i=$wynik->fetch();
      $change=$pdo->prepare("UPDATE user SET password=:password WHERE id_user=$i[0]");
      $change->bindValue(':password',$password, PDO::PARAM_STR);
      $change->execute();
      echo 'HASŁO ZOSTAŁO ZMIENIONE';
      echo '<meta http-equiv="refresh" content="0; URL=#">';
    }
  }
?>