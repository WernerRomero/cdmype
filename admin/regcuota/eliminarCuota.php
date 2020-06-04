<?php
	include('../php/config/config.php');
	if(isset($_POST['txtIdCuota']) && !empty($_POST['txtIdCuota'])){ 
		$id = $_POST['txtIdCuota'];
		$sql = "delete from cuota where id_cuota='$id'"; 
	}
	$resp = mysqli_query($link, $sql) or die('<h1 class="error">Error! No Puedes hacer esta accion, Por favor recarga la pagina</h1>'); 
	include('busquedaCuota.php');
?>