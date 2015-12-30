<?php

$obrazki=array("images/DSC_0353.jpg","images/DSC_0354.jpg","images/DSC_0355.jpg","images/DSC_0356.jpg","images/DSC_0357.jpg","images/DSC_0358.jpg","images/DSC_0359.jpg","images/DSC_0360.jpg","images/DSC_0361.jpg","images/DSC_0362.jpg","images/DSC_0363.jpg","images/DSC_0364.jpg");
shuffle($obrazki);


for($i=0; $i<3; $i++)
{
echo'<img src="';
echo $obrazki[$i];
echo'"/>';
}
?>
