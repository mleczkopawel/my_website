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
        <dt>C++</dt>
        <dd>
          Język programowania ogólnego przeznaczenia.
          Umożliwia abstrakcję danych oraz stosowanie kilku paradygmatów programowania: 
          proceduralnego, obiektowego i generycznego. Charakteryzuje się wysoką wydajnością 
          kodu wynikowego, bezpośrednim dostępem do zasobów sprzętowych i funkcji systemowych, 
          łatwością tworzenia i korzystania z bibliotek (napisanych w C++, C lub innych językach), 
          niezależnością od konkretnej platformy sprzętowej lub systemowej (co gwarantuje wysoką 
          przenośność kodów źródłowych) oraz niewielkim środowiskiem uruchomieniowym. Podstawowym
          obszarem jego zastosowań są aplikacje i systemy operacyjne.
          C++ został zaprojektowany przez Bjarne Stroustrupa jako rozszerzenie języka C o 
          obiektowe mechanizmy abstrakcji danych i silną statyczną kontrolę typów. Zachowanie 
          zgodności z językiem C na poziomie kodu źródłowego pozostaje jednym z podstawowych 
          celów projektowych kolejnych standardów języka.
          W latach 90. XX wieku język C++ zdobył pozycję jednego z najpopularniejszych języków 
          programowania ogólnego przeznaczenia. Na początku XXI wieku liczbę programistów języka 
          C++ szacowano na około 3 miliony.
          Od 1998 obowiązuje standard ISO/IEC 14882:1998 (Standard for the C++ Programming Language) 
          z drobnymi poprawkami zatwierdzonymi w 2003 r. (ISO/IEC 14882:2003). W 2009 roku ogłoszono 
          nowy standard (tzw. C++0x), który zaczął obowiązywać od 12 sierpnia 2011 roku, lecz 
          wciąż oczekuje na opublikowanie (ISO/IEC 14882:2011).
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
