<?php
	include('../php/config/config.php');
	if(isset($_POST['txtIdInscribir']) && !empty($_POST['txtIdInscribir'])){ 
		$id = $_POST['txtIdInscribir']; 
		$sql = "DELETE FROM inscripcion WHERE id_inscripcion='$id'"; }
	$resp = mysqli_query($link, $sql) or 
			die( " <h1 class='error'>Error! No Puedes hacer esta accion, Por favor recarga la pagina</h1> "); 
	include('busquedaInscrito.php');
?>