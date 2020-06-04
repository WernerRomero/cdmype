<?php
	include('../php/config/config.php');
	if(isset($_POST['txtIdNivel']) && !empty($_POST['txtIdNivel'])){ 
		$id = $_POST['txtIdNivel']; 
		$sql = "delete from nivel where id_nivel='$id'"; 
	}
	$resp = mysqli_query($link, $sql) or die('<h1 class="error">Error! No Puedes hacer esta accion, Por favor recarga la pagina</h1>'); 
	include('busquedaNivel.php');
?>