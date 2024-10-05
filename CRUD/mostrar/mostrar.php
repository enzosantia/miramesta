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
	