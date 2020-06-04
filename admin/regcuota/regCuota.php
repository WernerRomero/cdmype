<?php
	include('../php/config/config.php');
	$fecha = isset($_POST['txtFecha']) ? $_POST['txtFecha'] : '';  $cbociclo = isset($_POST['cbociclo']) ? $_POST['cbociclo'] : '';  $numero_cuota = isset($_POST['txtnumCuota']) ? $_POST['txtnumCuota'] : ''; 
	if(isset($_POST['txtIdCuota']) && !empty($_POST['txtIdCuota'])){ 
		$id = $_POST['txtIdCuota']; 
		$sql = "UPDATE cuota SET 
								fecha		 = '$fecha',
								id_ciclo 	 = '$cbociclo', 
								numero_cuota = '$numero_cuota' 
				WHERE id_cuota='$id'"; 
	}else{ $sql = "INSERT INTO cuota VALUES(null,'$fecha', '$cbociclo', '$numero_cuota')"; }
	$resp = mysqli_query($link, $sql) or die(mysqli_error($link)); 
	include('busquedaCuota.php');
?>