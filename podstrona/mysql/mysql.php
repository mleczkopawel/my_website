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
        <dt>MySQL</dt>
        <dd>
          Wolnodostępny system zarządzania relacyjnymi bazami danych.
          MySQL rozwijany jest przez firmę Oracle. Wcześniej przez większość 
          czasu jego tworzeniem zajmowała się szwedzka firma MySQL AB. MySQL AB została 
          kupiona 16 stycznia 2008 roku przez Sun Microsystems, a ten 27 stycznia 2010 roku 
          przez Oracle. W międzyczasie Monty Widenius (współtwórca MySQL) stworzył MariaDB 
          – forka (alternatywną wersję) opartego na licencji GPL. MariaDB jest oparta na tym 
          samym kodzie bazowym co MySQL i dąży do utrzymania kompatybilności z jej poprzednimi wersjami.
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
