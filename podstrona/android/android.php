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
    <blockquote>
      <dl>
        <dt>ANDROID</dt>
        <dd>
          System operacyjny z rodziny Linux dla urządzeń mobilnych takich jak telefony komórkowe, 
          smartfony, tablety (tablety PC) i netbooki. Obecnie (2015) najpopularniejszy system 
          mobilny na świecie. Android, mimo że nie jest typową dystrybucją Linuksa, jest systemem 
          Linuksowym, a więc został oparty na jądrze Linux oraz oprogramowaniu na licencji 
          GNU. Początkowo był rozwijany przez firmę Android Inc. (kupioną później przez Google), 
          następnie przeszedł pod skrzydła Open Handset Alliance.
          Android zrzesza przy sobie dużą społeczność deweloperów piszących aplikacje, 
          które poszerzają funkcjonalność urządzeń. W sierpniu 2014 było dla tego systemu dostępnych 
          ponad 1,3 miliona aplikacji w Google Play (wcześniej Android Market).
        </dd>
      </dl>
      <small>wikipedia.pl</small>
    </blockquote>
   <?php
            }
        include '../layout/polecane.php';
        include '../layout/footer.php';
    ?>
  </body>
</html>
