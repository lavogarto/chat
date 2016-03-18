<?php

$texto = $_GET['chat'];

$sala = $_GET['sala'];

$lineas = file("q$sala.html");

$palabra=$texto;

$a = 0;

 foreach($lineas as $linea){
        
if (strstr($linea,$palabra)){
		$a=1;
	}	
}

if ($a == 0)
{
	$myfile = fopen("q$sala.html","a+");
	fwrite($myfile,"$texto\n");
	fclose($myfile);
}

?>

