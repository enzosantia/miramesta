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
	mostrar_datos($conecta);	
?>
<h2>Nuevo usuario</h2>
<form action="agregar_usuario.php" method="post">
<label for="id_U"> Id_U:</label>
<input type="text" name="id_U"/><br/>

<label for="apellido">Apellido:</label>
<input type="text" name="apellido"/><br/>

<label for="nombre">Nombre:</label>
<input type="text" name="nombre"/><br/>

<label for="edad">Edad:</label>
<input type="text" name="edad"/><br/>

<input type="submit" name="agregar" value="agregar empleado"/>
<input type="reset" name="borrar" value="cencelar"/>
</form>
<br/>
'<a href="../index.html">Inicio</a>'

</body>
</html>
		