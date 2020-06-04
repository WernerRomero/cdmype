<?php
	include('../php/config/config.php');
	if(isset($_POST['txtIdHorario']) && !empty($_POST['txtIdHorario'])){ 
		$id = $_POST['txtIdHorario']; 
		$sql = "delete from horario where id_horario='$id'"; 
	}
	$resp = mysqli_query($link, $sql) or die('<h1 class="error">Error! No Puedes hacer esta accion, Por favor recarga la pagina</h1>'); 
	include('busquedaHorario.php');
?>