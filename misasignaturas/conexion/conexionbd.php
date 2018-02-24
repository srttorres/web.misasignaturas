<?php
include(configuracion.php);
$conexion=new mysqli($server,$user,$pass,$bd);
if(mysqli_connect_error()){
	echo "conexion a la db incorrecta",mysqli_connect_error();
	exit();
}
else{
	echo "conexion correcta a la db";
}
?>