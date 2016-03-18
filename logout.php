 <?php



$seccion=$_GET['user'];



    $borrar=$seccion;



     $cadena=file("users.html");

    $cadena=str_replace($borrar."\n","",$cadena);



    file_put_contents("users.html",$cadena);



    unlink ("$seccion.html");



    unlink ("q$seccion.html");





?> 