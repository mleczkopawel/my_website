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
    <div class="c">
    <h2>Formularz</h2>                              
    <form action="dane.php" method="post">
        <fieldset>
            <legend>Dane osobowe</legend>
                <div id="lewa">
                    <label class="nazwisko" for="nazwisko"> Nazwisko: </label>
                    <input name="nazwisko" >
                    <label class="imie" for="imie"> Imię: </label>
                    <input name="imie" ><br>
                </div>  
                <div id="prawa">
                    <label class="imie2" for="imie2"> Drugie imię: </label>
                    <input name="imie2" >
                    <label class="email" for="email"> e-mail: </label>
                    <input name="email" type="email" ><br>
                </div> 
                <div id="dane">
                    <label> Płeć: </label>
                        <input type="radio" name="plec" value="Kobieta" id="Kobieta" /><label for="plec_k">Kobieta</label>    
                        <input type="radio" name="plec" value="Mężczyzna" id="Mężczyzna" /><label for="plec_m">Mężczyzna</label> 
                    <br> 
                    <label class="szkola" for="szkola"> Nazwa szkoły: </label><input name="szkola" >  
                    <label> Województwo: </label>
                        <select name="wojewodztwo">
                            <option value="dolnośląskie">dolnośląskie</option>
                            <option value="kujawsko-pomorskie">kujawsko-pomorskie</option>
                            <option value="lubelskie">lubelskie</option>
                            <option value="lubuskie">lubuskie</option>
                            <option value="łódzkie">łódzkie</option>
                            <option value="małopolskie">małopolskie</option>
                            <option value="mazowiecki">mazowieckie</option>
                            <option value="opolskie">opolskie</option>
                            <option value="podkarpackie">podkarpackie</option>
                            <option value="podlaskie">podlaskie</option>
                            <option value="pomorskie">pomorskie</option>
                            <option value="śląskie">śląskie</option>
                            <option value="świętokrzyskie">świętokrzyskie</option>
                            <option value="warmińsko-mazurskie">warmińsko-mazurskie</option>
                            <option value="wielkopolskie">wielkopolskie</option>
                            <option value="zachodniopomorskie">zachodniopomorskie</option>
                        </select>
                    <br>
                    <label class="urodzenie" for="urodzenie"> Data urodzenia: </label> 
                        <input name="urodzenie" type="date" >    
                    <label class="wiek"  for="wiek">Wiek: </label>
                        <input name="wiek" size="1" type="number" maxlength="3" ><br>     
                    <label class="pesel" for="pesel">Pesel: </label>
                        <input name="pesel" type="text" size="10" maxlength="11" />    
                    <label class="dowod" for="dowod">Nr dowodu: </label>
                        <input name="dowod1" type="text" size="1" maxlength="3" />
                        <input name="dowod2" type="text" size="6" maxlength="6" />    
                    <label class="regon" for="regon">Regon: </label>
                        <input name="regon" type="text" size="8" maxlength="9" />
                    <br>
                </div>     
        </fieldset> 
        <fieldset>
            <legend>Pytania zasadnicze</legend>
                <h3>Ile miesięcznie wysyłasz SMS-ów?</h3>
                    <input class="one" type="radio" name="sms" value="poniżej 10" /><label for="sms10">poniżej 10</label>
                    <input class="two" type="radio" value="10-50" name="sms"/><label for="sms50">10-50</label> 
                    <input class="three" type="radio" value="51-100" name="sms"/><label for="sms100">51-100</label> 
                    <br>
                    <input class="one" type="radio" value="101-150" name="sms"/><label for="sms150">101-150</label> 
                    <input class="two2" type="radio" value="151-200" name="sms"/><label for="sms200">151-200</label> 
                    <input class="three2" type="radio" value="201-300" name="sms"/><label for="sms300">201-300</label> 
                    <br>
                    <input class="one" type="radio" value="301-500" name="sms"/><label for="sms500">301-500</label>  
                    <input class="two2" type="radio" value="powyżej 500" name="sms"/><label for="sms501">powyżej 500</label>    
                    <input class="three3" type="radio" value="zależy, ile mam kasy" name="sms"/><label for="sms502">zależy, ile mam kasy</label> 
                    <br>
                <h3>Jaką lubisz muzykę(możesz zaznaczyć więcej możliwości)?</h3>
                <div id="muzyka">
                    <input type="checkbox" name="muzyka[]" value="Rock"  /> <label for="muzyka">Rock </label> <br>
                    <input type="checkbox" name="muzyka[]" value="Heavy Metal" /> <label for="muzyka">Heavy Metal </label> <br>
                    <input type="checkbox" name="muzyka[]" value="Pop" /> <label for="muzyka">Pop </label> <br>
                    <input type="checkbox" name="muzyka[]" value="Techno" /> <label for="muzyka">Techno </label> <br>
                    <input type="checkbox" name="muzyka[]" value="Muzyka poważna" /> <label for="muzyka">Muzyka poważna </label> <br>
                    <input type="checkbox" name="muzyka[]" value="" /> <label for="muzyka">Inna (podaj jaką): </label> <input name="Inne" type="text" >
                </div>
                <h3><label for="uwagi">Podaj uwagi: </label> </h3>
                    <textarea name="uwagi" rows="15" cols="50"></textarea>
        </fieldset>    
        <p><input class="send" type="submit" value="Wyślij formularz"></p>
    </form>
  </div>
      <hr class="featurette-divider">
      <?php
            }
        include '../layout/polecane.php';
        include '../layout/footer.php';
      ?>
  </body>
</html>    