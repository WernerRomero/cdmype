<?php
	include('../php/config/config.php');
	if(isset($_POST['txtIdCliente']) && !empty($_POST['txtIdCliente'])){ 
		$id = $_POST['txtIdCliente']; 
		$sql = "delete from cliente where id_cliente='$id'"; 
	}
	$resp = mysqli_query($link, $sql) or die('<h1 class="error">Error! No Puedes hacer esta accion, Por favor recarga la pagina</h1>'); 
	include('busquedaCliente.php');
?>