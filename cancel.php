 <?php

$seccion=$_GET['sala'];

    $borrar=$_GET['user'];

$borrar2=$borrar;

     $cadena=file("q$seccion.html");

    $cadena=str_replace($borrar2."\n","",$cadena);

    file_put_contents("q$seccion.html",$cadena);

	//unlink ("$seccion$borrar.html");

	//unlink ("$borrar$seccion.html");



?> 