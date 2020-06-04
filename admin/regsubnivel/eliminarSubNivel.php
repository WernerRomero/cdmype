<?php
	include('../php/config/config.php');
	if(isset($_POST['txtIdSubNivel']) && !empty($_POST['txtIdSubNivel'])){ 
		$id = $_POST['txtIdSubNivel']; 
		$sql = "delete from sub_nivel where id_sub_nivel='$id'"; 
	}
	$resp = mysqli_query($link, $sql) or die('<h1 class="error">Error! No Puedes hacer esta accion, Por favor recarga la pagina</h1>'); 
	include('busquedaSubNivel.php');
?>