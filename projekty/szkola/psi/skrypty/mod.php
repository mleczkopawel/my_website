 <?php
$nazwastrony = "index.php";  //nazwa strony na której będzie kod
$modyfikacja = filemtime($nazwastrony);
print ("Stronę modyfikowano: <b>".date("d.m.Y - H:i", $modyfikacja)."</b>");
?>