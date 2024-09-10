<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- @(#) $Id$ -->
<head>
	<title>HTML Template</title>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<meta name="Generator" content="Dev-PHP 2.6.1" />
	<meta name="Keywords" content="your,keywords,here" />
	<meta name="Description" content="." />

	<meta http-equiv="pragma" content="no-cache" />
	<meta http-equiv="cache-control" content="no-cache" />

	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="stdStyle.css" />
</head>
<body>

<?php
	include"../conexion/conexion.php";
	include"../funciones/funciones.php";
	$conecta=conectar();
	$opcion=$_GET['opcion'];
	switch ($opcion){
		case 1:
		mostrar_Pelicula($conecta,"select * from pelicula");
		break;
		case 2: 
		mostrar_Usuario($conecta,"select * from usuario");
		break;
		case 3:
		header('Location:buscar_duracion.html');
		break;
	}
	mysqli_close($conecta)
?>
</body>
</html>

	