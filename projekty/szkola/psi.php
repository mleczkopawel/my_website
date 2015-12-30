<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <?php
        include "head.php"
    ?>
</head>
<body>
<?php 
    include"layout/menu.php"; 
    include"layout/header.php";
    include"layout/up.php";
?>
<h2 class="art-postheader">PSI</h2>
<h3 class="art-postheader">
    <a href="psi/formularz-duzy.php">Formularz</a>
    <a href="psi/obrazki.php">Obrazki</a>
    <a href="psi/wierszyki.php">Wierszyki</a>
</h3>
<hr>
<?php
    include"psi/skrypty/data.php";
    echo '<hr>';
    include"psi/skrypty/godz.php";
    echo '<hr>';
    include"psi/skrypty/godz2.php";    
    echo '<hr>';
    include"psi/skrypty/kalendarz.php";
    echo '<hr>';
    include"psi/skrypty/mod.php";
    echo '<hr>';
    include"psi/skrypty/mail.php";
    echo '<hr>';
    include"psi/skrypty/obrazek.php";
    echo '<hr>';
    include"psi/skrypty/haslo.php";
    echo '<hr>';
    include"psi/skrypty/trzy_obrazki.php";
?>
<?php
    include"layout/down.php";
    include "layout/footer.php";
?>

</div>


</body></html>