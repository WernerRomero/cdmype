<?php
	include('../php/config/config.php');
	$nomCiclo = isset($_POST['txtnomCiclo']) ? $_POST['txtnomCiclo'] : ''; 
	if(isset($_POST['txtIdCiclo']) && !empty($_POST['txtIdCiclo'])){ 
		$id = $_POST['txtIdCiclo']; 
		$sql = "UPDATE ciclo SET nombre_del_ciclo='$nomCiclo' WHERE id_ciclo='$id'"; 
	}else{ $sql = "INSERT INTO ciclo VALUES(null,'$nomCiclo')"; }
	$resp = mysqli_query($link, $sql) or die(mysqli_error($link)); 
	include('busquedaCiclo.php');

?>