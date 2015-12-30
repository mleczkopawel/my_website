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
        <dt>JAVA</dt>
        <dd>
          Obiektowy język programowania stworzony przez grupę roboczą pod kierunkiem 
          Jamesa Goslinga z firmy Sun Microsystems. Java jest językiem tworzenia programów 
          źródłowych kompilowanych do kodu bajtowego, czyli postaci wykonywanej przez 
          maszynę wirtualną. Język cechuje się silnym typowaniem. Jego podstawowe koncepcje zostały
          przejęte z języka Smalltalk (maszyna wirtualna, zarządzanie pamięcią) oraz z języka C++
          (duża część składni i słów kluczowych).
          Javy nie należy mylić ze skryptowym językiem JavaScript, z którym wspólną ma jedynie 
          składnię podstawowych instrukcji.
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
