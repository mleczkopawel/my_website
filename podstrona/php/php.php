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
        <dt>PHP</dt>
        <dd>
        Obiektowy język programowania zaprojektowany do generowania stron internetowych i budowania 
        aplikacji webowych w czasie rzeczywistym.
        PHP jest najczęściej stosowany do tworzenia skryptów po stronie serwera WWW, 
        ale może być on również używany do przetwarzania danych z poziomu wiersza poleceń, 
        a nawet do pisania programów pracujących w trybie graficznym (np. za pomocą biblioteki GTK+, 
        używając rozszerzenia PHP-GTK). Implementacja PHP wraz z serwerem WWW Apache oraz serwerem baz 
        danych MySQL określana jest jako platforma AMP (w środowisku Linux – LAMP, w Windows – WAMP).
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
