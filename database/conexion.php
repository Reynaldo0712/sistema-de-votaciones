<?php

$host = "localhost";
$user = "root"; 
$Password = ""; 
$DBname = "proyecto_final"; 
$link = mysqli_connect($host,$user,$Password) 
or die ("Mala conexion");
mysqli_select_db($link,$DBname);
return $link;

?>