<?php
	include('../php/config/config.php');
	if(isset($_POST['txtIdCobro']) && !empty($_POST['txtIdCobro'])){ 
		$id = $_POST['txtIdCobro']; 
		$sql = "DELETE FROM cobro WHERE id_cobro='$id'"; }
	$resp = mysqli_query($link, $sql) or die('<h1 class="error">Error! No Puedes hacer esta accion, Por favor recarga la pagina</h1>'); 
	include('busquedaCobro.php');
?>