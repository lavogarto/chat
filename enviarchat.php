<?php

$texto = $_GET['chat'];

$sala = $_GET['sala'];

$myfile = fopen("$sala.html","a+");

fwrite($myfile,"$texto\n");

fclose($myfile);

?>

