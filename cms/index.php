<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    session_start();
    error_reporting(0);
    ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Paweł Mleczko">
    <link rel="icon" href="mysql.ico">
    <title>CMS</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
    <script src="js/script.responsive.js"></script>    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="css/style.css" rel="stylesheet">
    <style>.art-content .art-postcontent-0 .layout-item-0 { padding-right: 10px;padding-left: 10px;  }
                        .ie7 .art-post .art-layout-cell {border:none !important; padding:0 !important; }
                        .ie6 .art-post .art-layout-cell {border:none !important; padding:0 !important; }

</style>
  </head>
  <body>  
   <?php
        include 'layout/menu.php';  
            if($_SESSION['auth'] == TRUE && !isset($_GET['logout']) && $_SESSION['user']=='admin')
            {    
                echo "<br><br><br><br><b><h1>Cześć, ".$_SESSION['user']."!</h1></b><br>";
                include 'layout/mysql/dodawanie_tekstu.php';
            }
            else
            {           
                $_SESSION['auth']=FALSE;     
                echo'   
                    <div class="c">
                        <form class="formek" action="layout/mysql/logowanie.php" method="post" name="logowanie">
                            <fieldset class="field">            
                            <legend>Zaloguj się</legend>
                            <form action="mysql/login.php" method="GET" name="logowanie">
                                <label> Login: </label><input name="login" type="text" ><br>
                                <label> Hasło: </label><input name="password" type="password" ><br>
                                <p><input class="btn btn-sm btn-primary" type="submit" value="Zaloguj" name="logowanie"></p>  
                            </fieldset>
                        </form>
                    </div>';               
            }
        include 'layout/footer.php';
      ?>
  </body>
</html>