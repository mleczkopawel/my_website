<?php

function printDate()
{
  $data = date("d-m-Y");
  echo($data);
}

function printTime()
{
  $czas = date("G:i");
  echo($czas);
}
?>
<HTML>
<HEAD>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-2">
</HEAD>
<BODY>
Dzisiaj jest <?PHP printDate() ?>
<BR>
Godzina <?PHP printTime() ?>
</H2>
</BODY>
</HTML>
