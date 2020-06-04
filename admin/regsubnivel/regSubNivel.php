<?php
	include('../php/config/config.php');
	$idNivel = isset($_POST['cbonivel']) ? $_POST['cbonivel'] : ''; $nomSubNivel = isset($_POST['txtnomSubNivel']) ? $_POST['txtnomSubNivel'] : ''; 
	if(isset($_POST['txtIdSubNivel']) && !empty($_POST['txtIdSubNivel'])){ 
		$id = $_POST['txtIdSubNivel']; 
		$sql = "UPDATE sub_nivel SET 
									Id_nivel = '$idNivel', 
									nombre_del_sub_nivel='$nomSubNivel' 
				WHERE id_sub_nivel='$id'"; 
	}else{ 
		$sql = "INSERT INTO sub_nivel VALUES('','$idNivel','$nomSubNivel')"; 
	}
	$resp = mysqli_query($link, $sql) or die(mysqli_error($link)); 
	include('busquedaSubNivel.php');
?>