<?php
	include('../php/config/config.php');
	$nomNivel = isset($_POST['txtnomNivel']) ? $_POST['txtnomNivel'] : ''; 
	if(isset($_POST['txtIdNivel']) && !empty($_POST['txtIdNivel'])){ 
		$id = $_POST['txtIdNivel']; 
		$sql = "UPDATE nivel SET 
								nombre_del_nivel='$nomNivel' 
							WHERE id_nivel='$id'"; 
	}else{ 
		$sql = "INSERT INTO nivel VALUES('','$nomNivel')"; 
	}
	$resp = mysqli_query($link, $sql) or die(mysqli_error($link)); 
	include('busquedaNivel.php');
?>