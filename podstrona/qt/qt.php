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
        <dt>Qt</dt>
        <dd>
          Zestaw przenośnych bibliotek i narzędzi programistycznych dedykowanych dla języków C++, 
          QML i Java. Ich podstawowym składnikiem są klasy służące do budowy graficznego interfejsu 
          programów komputerowych, począwszy od wersji 4.0 Qt zawiera też narzędzia do tworzenia 
          programów konsolowych i serwerów.
          Twórcą Qt jest obecnie organizacja Qt Project, do której oprócz niezależnych twórców 
          Open Source należą m.in. firmy Digia, KDAB, ICS. Digia jest właścicelem praw do 
          komercyjnej wersji Qt oraz do znaków towarowych, po zakupie od firmy Nokia 
          (będącej właścicielem pomiędzy styczniem 2008 a sierpniem 2012).
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
