<div class="navbar-wrapper">
  <div class="container">
    <nav class="navbar navbar-inverse navbar-inverse-top">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="https://www.facebook.com/facekomunikatorek"><span class='glyphicon glyphicon-user'></span>Paweł Mleczko</a>
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="../../index.php">Główna</a></li>  
          <li><a href="../../about.php">O mnie</a></li>
          <li><a href="../../contact.php">Kontakt</a></li>
          <?php
            if($_SESSION['auth'] == TRUE && !isset($_GET['logout']))
            {
          ?>
              <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Projekty<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li class="dropdown-header">HTML/PHP/MySQL/jQuery</li>                            
                  <li><a href="../../projekty/szkola/index.php">Szkoła-old</a></li>
                  <li><a href="../../projekty/anvils/index2.php">Anvlis</a></li>
                  <li class="divider"></li>
                  <li class="dropdown-header">C++</li>
                  <li class="divider"></li>
                  <li class="dropdown-header">JAVA</li>
                  <li class="divider"></li>
                  <li class="dropdown-header">ANDROID</li>
                  <li class="divider"></li>
                  <li class="dropdown-header">QT</li>
                  <li><a href="../../podstrona/qt/dok_altium.php">Dokumentacja Altium</a></li>
                </ul>
              </li>
            <?php 
              if($_SESSION['user']=='admin')
              {     
                ?>
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Stare <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header">PHP</li>
                    <li><a href="../../podstrona/php/skrypty.php">Skrypty</a></li>
                    <li><a href="../../podstrona/php/wierszyki.php">Wierszyki</a></li>
                    <li><a href="../../podstrona/php/wykresy.php">Wykresy</a></li>
                    <li><a href="../../podstrona/php/formularz.php">Formularz</a></li>
                    <li><a href="../../podstrona/php/logowanie.php">Logowanie</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">JAVA</li>
                    <li><a href="../../podstrona/java/fizyka.php">Aplety tematyczne</a></li>
                    <li><a href="../../podstrona/java/banner.php">Aplet banner</a></li>
                    <li><a href="../../podstrona/java/rozmieszczenie.php">Aplety rozmieszczenie</a></li>
                    <li><a href="../../podstrona/java/zdarzenia.php">Aplety zdarzenia</a></li>
                    <li><a href="../../podstrona/java/wykresy.php">Wykresy</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Example <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="../../podstrona/example/ex_1.php">Ex. 1</a></li>
                      <li><a href="../../podstrona/example/ex_2.php">Ex. 2</a></li>
                    </ul>
                </li>                  
                <?php
                  }
                  elseif($_SESSION['auth']== TRUE && $_SESSION['user']!='admin'){}                        
                ?>                            
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li>
                <?php
                  if($_SESSION['auth'] == TRUE && !isset($_GET['logout']))
                  {   
                    //$pdo=new PDO('mysql:host=mysql.cba.pl;dbname=mleczkopawel_cba_pl;','adminpadmin','tracer12');
                    //$pdo=new PDO('mysql:host=mysql.hostinger.pl;dbname=u133897514_baaza;','u133897514_padmi','tracer12');
                    $pdo=new PDO('mysql:host=localhost;dbname=dane','root','zaq');
                  $wynik = $pdo -> query("SELECT name FROM user WHERE login='$_SESSION[user]'");
                  echo "<a href='../../user.php'><span class='glyphicon glyphicon-user'></span> ";
                  if($_SESSION['auth']==TRUE)
                    echo $_SESSION['user']."</br>";
                  echo "</a>";       
                  }
                  else{}
                ?> 
                </li>                        
                <li>
                  <?php
            }
            else{}
            if($_SESSION['auth'] == TRUE && !isset($_GET['logout'])) 
              echo '<a href="../../layout/mysql/logout.php"><span class="glyphicon glyphicon-log-in"></span> Wyloguj</a>';
            else{}
            ?> 
                </li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                  <?php
                    if($_SESSION['auth'] == FALSE && !isset($_GET['logout']))
                    {   
                      echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Zaloguj<span class="caret"></span></a>';
                      echo '<ul class="dropdown-menu" role="menu">';
                      echo '<li>';
                      echo '<form action="../../layout/mysql/logowanie.php" method="post" name="logowanie">';
                      echo '<label class="in"> Login: </label><input class="in" name="login" type="text" ><br>';
                      echo '<label class="in"> Hasło: </label><input class="in" name="password" type="password" ><br>';
                      echo '<p><center><input class="btn btn-sm btn-primary" type="submit" value="Zaloguj" name="logowanie"></center</p> ';
                      echo '</form></li>';
                      echo '</ul>'; 
                    }
                  ?>
                    </li>                    
                    <li>
                  <?php
        if($_SESSION['auth'] == FALSE && !isset($_GET['logout']))  
      echo '<a href="../../register.php">Zarejestruj</a>';
      ?>
      </li>
      </ul>       
      </div>
      </div>
    </nav>
  </div>
</div>