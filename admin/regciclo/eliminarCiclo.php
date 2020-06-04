<?php
	include('../php/config/config.php');
	if(isset($_POST['txtIdCiclo']) && !empty($_POST['txtIdCiclo'])){ 
		$id = $_POST['txtIdCiclo']; 
		$sql = "delete from ciclo where id_ciclo='$id'"; 
	}
	$resp = mysqli_query($link, $sql) or die('<h1 class="error">Error! No Puedes hacer esta accion, Por favor recarga la pagina</h1>'); 
	include('busquedaCiclo.php');
?>