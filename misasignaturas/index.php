<?php 
/*
AUTHOR:based on udemy crud basico y aplicación multiusuario con php y mysql
PAGINA PRINCIPAL INCLUYE DOS BLOQUES:
bloque_nuevoAlumno  
bloque_listadoAlumnos
*/
$TITULO_PAGINA="ASIGNATURA";
$TITULO_BLOQUE='null';
?>
<!DOCTYPE html>
<html>
<head>	
 	<meta charset="utf-8">
  	<title><?php echo "$TITULO_PAGINA"; ?></title>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
	<header>
		<h1><?php echo "$TITULO_PAGINA"; ?></h1>
	</header>
	<!-- SECCION PRIMERA//////////////////////////////////////////////////////////////////////////////////////////////////////////-->
	<div class="container seccion-primera">
	<p><?php $TITULO_BLOQUE="se va a registrar las siguientes asignaturas:"; echo "$TITULO_BLOQUE"; ?></p>
	<?php
	include("conexion/conexionbd.php");		
	$sql_nuevoalumno = "INSERT INTO 'asignaturas' (codigoasignaturas, nombreasignaturas, nota) VALUES ('0932092', 'biología molecular aplicada', '9')";

	$resultadomateria=$conexion->query($sqlmateria);
	if($conexion->connect_error){
		echo "<script> alert('error de inserción'); window.location='index.php'</script>";
	}
	else{
		echo "<script> alert('inserción correcta'); window.location='index.php'</script>";			
	}
	?>
	<!-- SECCION SEGUNDA//////////////////////////////////////////////////////////////////////////////////////////////////////////-->
	<div class="container seccion-segunda">
	<p><?php $TITULO_BLOQUE="Mis Asignaturas"; echo "$TITULO_BLOQUE"; ?></p>
	<table border="1">
	<thead>
		<tr>
			<th>código</th>
			<th>asignatura</th>
			<th>nota</th>
		</tr>
	</thead>
	</table>
	</div>
	<!-- SECCION TERCERA//////////////////////////////////////////////////////////////////////////////////////////////////////////-->
	<div class="container seccion-tercera">
		<p><?php $TITULO_BLOQUE="Sin calificar"; echo "$TITULO_BLOQUE"; ?></p>
	</div>

 <footer>
  <p>designed by srttorres</p>
</footer>

</body>
</html> 