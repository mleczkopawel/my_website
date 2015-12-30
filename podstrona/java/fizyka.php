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
      <hr class="featurette-divider">
      <applet class="aplet" code="MFStab.class" archive="MFStab.jar, Ph14Polish.jar" codebase="classes"></applet> 
      <applet code="MFLeiter.class" archive="MFLeiter.jar, Ph14Polish.jar" codebase="classes"></applet>
      <applet code="Lorentzkraft.class" archive="Lorentzkraft.jar, Ph14Polish.jar" codebase="classes"></applet>
      <applet code="Elektromotor.class" archive="Elektromotor.jar, Ph14Polish.jar" codebase="classes"></applet>
      <applet code="Generator.class" archive="Generator.jar, Ph14Polish.jar" codebase="classes"></applet>
      <applet code="Ohm.class" archive="Ohm.jar, Ph14Polish.jar" codebase="classes"></applet>
      <applet code="KombiWid.class" archive="KombiWid.jar, Ph14Polish.jar" codebase="classes"></applet>
      <applet code="WStromkreis.class" archive="WStromkreis.jar, Ph14Polish.jar" codebase="classes"></applet>      
      <?php
            }
        include '../layout/polecane.php';
        include '../layout/footer.php';
      ?>
  </body>
</html>