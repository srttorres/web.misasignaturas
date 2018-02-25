<?php 
/*
AUTHOR:srttorres

*/
$TITULO_PAGINA='TRATAMIENTO FORMULARIO';
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
<body>
<div class="container seccion-primera">
<form method="POST" action="tratamiento_formulario.php">
    insert your name: <input type="text" name="name">
    <input type="submit" value="click" name="submit"> <!-- assign a name for the button -->
</form>
<div>
<?php

function display(){
    echo "hello ".$_POST['name']." i am TARS, the funny-ironic robot";
}
echo "<div class=\"container seccion-segunda\">";	
if(isset($_POST['submit']))
{
   display();
}

?>


</div>


</body>