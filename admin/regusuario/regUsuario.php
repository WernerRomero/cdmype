<?php
	include('../php/config/config.php');
	$nombre		 = strtolower(isset($_POST['txtnombre']) ? $_POST['txtnombre'] : ''); 
	$apellido	 = strtolower(isset($_POST['txtapellido']) ? $_POST['txtapellido'] : ''); 
	$usuario	 = strtolower(isset($_POST['txtuser']) ? $_POST['txtuser'] : ''); 
	$contrasenia = strtolower(isset($_POST['txtpassword']) ? $_POST['txtpassword'] : ''); 
	$tipo		 = isset($_POST['cbotipo']) ? $_POST['cbotipo'] : '';

	if(isset($_POST['txtIdUsuario']) && !empty($_POST['txtIdUsuario'])){ 
		$id = $_POST['txtIdUsuario']; 
		$sql = "UPDATE usuario SET 
									nombre='$nombre', 
									apellido='$apellido',
									tipo='$tipo', 
									username='$usuario', 
									password='$contrasenia' 
				WHERE id_usuario='$id'"; 
	}else{ 
		$sql = "INSERT INTO usuario VALUES( null, '$nombre', '$apellido', '$tipo', '$usuario', '$contrasenia' )"; 
	}
	$resp = mysqli_query($link, $sql) or die(mysqli_error($link)); 
	include('busquedaUsuario.php');
?>