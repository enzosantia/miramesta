<?php
	include"../conexion/conexion.php";
	include"../funciones/funciones.php";
	$conecta=conectar();
	
	if(isset($_POST['agregar'])){
		$id_U=$_POST['id_U'];
		$apellido=$_POST['apellido'];
		$nombre=$_POST['nombre'];
		$edad=$_POST['edad'];
	agregar_usuario($conecta,$id_U,$apellido,$nombre,$edad);
	}
	else
	echo '<a href="../index.html">Inicio</a>';
?>	