<?php

$texto = $_GET['user'];



$myfile = fopen("users.html","a+");

fwrite($myfile,"$texto\n");

fclose($myfile);


$myfile2 = fopen("q$texto.html","a+");

fclose($myfile2);


/*

$myfile = fopen("userson.html","a+");

fwrite($myfile,"$texto\n");

fclose($myfile);

*/



?>

