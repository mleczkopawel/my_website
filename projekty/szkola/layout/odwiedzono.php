<fieldset>
    <?php
        $liczba = file_get_contents("licznik.txt");
        $liczba = $liczba + 1;
        echo "Stronę odwiedzono ";
        echo $liczba;
        echo " razy";
        $fl = fopen("licznik.txt","w+");
        fwrite($fl,$liczba);
        fclose($fl);
    ?>   
</fieldset>