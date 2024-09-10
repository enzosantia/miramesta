<?php
function mostrar_Pelicula($conecta,$consulta){
	$resultado=mysqli_query($conecta,$consulta);
	if(!$resultado)
		echo "<p>Error,vuelva a intertar de nuevo</p>";
	else{
		$filas=mysqli_num_rows($resultado);
		if ($filas==0){
			echo "<p>no hay datos</p>";
		}
		else{
			echo '<h2>Peliculas</h2>';
			echo'<table border="1">
				<thead>
				<tr>
					<th>Id_P</th>
					<th>Titulo</th>
					<th>director</th>
					<th>genero</th>
					<th>duracion</th>
				</tr>
				</thead>';
			while($tabla=mysqli_fetch_array($resultado)){
				echo '
					<tr>
						<td>'.$tabla['Id_P'].'</td>
						<td>'.$tabla['titulo'].'</td>
						<td>'.$tabla['director'].'</td>
						<td>'.$tabla['genero'].'</td>
						<td>'.$tabla['duracion'].'</td>						
					</tr>';
			} //fin del while
		echo'</table>';
		echo"<br></br>";
		}
		echo '<a href="../index.html">Inicio</a>';
	}
}

function mostrar_Usuario($conecta,$consulta){
	$resultado=mysqli_query($conecta,$consulta);
	if(!$resultado)
		echo "<p>Error,vuelva a intertar de nuevo</p>";
	else{
		$filas=mysqli_num_rows($resultado);
		if ($filas==0){
			echo "<p>no hay datos</p>";
		}
		else{
			echo '<h2>Usuarios</h2>';
			echo'<table border="1">
				<thead>
				<tr>
					<th>Id_U</th>
					<th>Apellido</th>
					<th>Nombre</th>
					<th>edad</th>
				</tr>
				</thead>';
			while($tabla=mysqli_fetch_array($resultado)){
				echo '
					<tr>
						<td>'.$tabla['Id_U'].'</td>
						<td>'.$tabla['Apellido'].'</td>
						<td>'.$tabla['Nombre'].'</td>
						<td>'.$tabla['edad'].'</td>					
					</tr>';
			} //fin del while
		echo'</table>';
		echo"<br></br>";
		}
		echo '<a href="../index.html">Inicio</a>';
	}
}

function buscar_por($conecta,$consulta){
	$resultado=mysqli_query($conecta,$consulta);
	if(!$resultado)
		echo "<p>Error,vuelva a intertar de nuevo</p>";
	else{
		$filas=mysqli_num_rows($resultado);
		if ($filas==0){
			echo "<p>no hay datos</p>";
		}
		else{
			echo '<h2>Peliculas</h2>';
			echo'<table border="1">
				<thead>
				<tr>
					<th>Id_P</th>
					<th>Titulo</th>
					<th>director</th>
					<th>genero</th>
					<th>duracion</th>
				</tr>
				</thead>';
			while($tabla=mysqli_fetch_array($resultado)){
				echo '
					<tr>
				<td>'.$tabla['Id_P'].'</td>
						<td>'.$tabla['titulo'].'</td>
				    		<td>'.$tabla['director'].'</td>
						<td>'.$tabla['genero'].'</td>
						<td>'.$tabla['duracion'].'</td>						
					</tr>';
			} //fin del while
		echo'</table>';
		echo"<br></br>";
		}
		echo '<a href="../index.html">Inicio</a><br/>';
	}
}
function mostrar_datos($conecta){
$consulta="select * from usuario";
$resultado=mysqli_query($conecta, $consulta);
if($resultado){
	echo '<p>Consultar usuarios existentes</p>';
	echo'
	<select name="listado" id="lista">';
	$i=1;
	while($tabla=mysqli_fetch_array($resultado)){
	echo'
	<option value="'.$tabla['Id_U'].'">'.$tabla['Apellido'].'-'.$tabla['Nombre'].'-'.$tabla['edad'].'</option>';
	}
	echo'</select>';
	}
	}



 function agregar_usuario($conecta,$id_U,$apellido,$nombre,$edad){
 $consulta="insert into usuario(id_U,Apellido,Nombre,edad) values ('$id_U','$apellido','$nombre',$edad)";
 $resultado=mysqli_query($conecta,$consulta);
 if(!$resultado){
 	echo "<p>Error,vuelva a intertar de nuevo</p>";
	echo '<a href="../agregar/form_agregar_usuario">Inicio</a> <a href="../index">inicio</a>';
 }
 else 
 mostrar_usuario($conecta,"select * from usuario");
 }
?>

		