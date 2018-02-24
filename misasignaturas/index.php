<?php 
/*
AUTHOR:based on udemy crud basico y aplicación multiusuario con php y mysql
PAGINA PRINCIPAL INCLUYE DOS BLOQUES:
bloque_nuevoAlumno
bloque_listadoAlumnos
*/
include("conexion/conexionbd.php");
if(!empty($POST)){
	$codigo=mysqli_real_escape_string($conexion,$_POST['cod']);//evita codigo malicioso
	$nombre=mysqli_real_escape_string($conexion,$_POST['nom']);
	$nota=mysqli_real_escape_string($conexion,$_POST['nota']);

	$vermaterias="SELECT codigoasignaturas, nombreasignatura, nota FROM asignaturas WHERE codigoasignaturas='$codigo'";
	$existemateria=$conexion->query($vermaterias);
	$filas=$existemateria->num_rows;
	if($filas>0){
		echo "<script> alert('la asignatura ya existe'); window.location='index.php'</script>";
	}
	else{
		$sql_nuevoalumno = "INSERT INTO 'asignaturas' 
		(codigoasignaturas, nombreasignaturas, nota) 
		VALUES ('$codigo', '$nombre', '$nota')";

		$resultadomateria=$conexion->query($sqlmateria);
		if($resultadomateria>0){
		echo "<script> alert('error de inserción'); window.location='index.php'</script>";
		}
		else{
		echo "<script> alert('inserción correcta'); window.location='index.php'</script>";			
		}
	}
}

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
	<p><?php $TITULO_BLOQUE="Registro Asignaturas"; echo "$TITULO_BLOQUE"; ?></p>
	<form 	action="<?php $_SERVER["PHP_SELF"]?>"
			method="POST" >
				código:<input type="text" name="cod" placeholder="codigo" required>
				asignatura:<input type="text" name="nom" placeholder="nombre asignatura" required>
				nota:<input type="number" name="nota" placeholder="0" required>
			<input type="submit" name="guardar" value="guardar">
	</form>
	</div>
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