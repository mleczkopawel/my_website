<div class="art-vmenublockheader">
    <h3 class="t">LOGOWANIE</h3>
</div>
<div class="art-vmenublockcontent">
    <?php
		session_start();
        if(isset($_SESSION['uzytkownik']))
            {    
                echo "<b>Cześć, ".$_SESSION['uzytkownik']."!</b><br>";
                echo '<a href="layout/logout.php">Wyloguj się!</a>';
                //treść na stronie
                include 'sesje.inc';
            }
        else
            {
    ?>
    <form action="layout/logowanie.php" method="post" name="logowanie">
        <label> Login: </label><input name="login" type="text" ><br>
        <label> Hasło: </label><input name="haslo" type="password" ><br>
        <p><input type="submit" value="Zaloguj" name="logowanie"></p>  
    </form>
    <?php
            }
    ?>
</div>
<hr>
<div class="art-vmenublockheader">
    <h3 class="t">MENU</h3>
</div>
<div class="art-vmenublockcontent">
    <ul class="art-vmenu">
        <li><a href="index.php" class="active">Główna</a></li>
        <li><a href="psio.php">PSIO</a>
            <ul>
                <li><a href="psio/aplety.php">Aplety</a></li>
            </ul>
        </li>
        <li><a href="psi.php">PSI</a>
            <ul>
                <li><a href="psi/formularz-duzy.php">Formularz-duży</a></li>
                <li><a href="psi/obrazki.php">Obrazki</a></li>
                <li><a href="psi/wierszyki.php">Wierszyki</a></li>
                <li><a href="psi/mysql_s.php">MySQL</a></li>
            </ul>
        </li>
        <li><a href="kontakt.php">Kontakt</a></li>     
        <li><a href="../../index.php">Portfolio</a></li>
    </ul>
</div>