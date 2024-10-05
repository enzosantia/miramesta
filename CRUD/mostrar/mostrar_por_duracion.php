<?php 
	include"../conexion/conexion.php";
	include"../funciones/funciones.php";
	$conecta=conectar();
	$Duracion=$_POST['duracion'];
	$consulta="select * from pelicula where duracion ='$Duracion'";
	buscar_por($conecta,$consulta);
	echo '<a href="../mostrar/buscar_duracion.html">Nueva busqueda </a><br/><br/>';
?>	