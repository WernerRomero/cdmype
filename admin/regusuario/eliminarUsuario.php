<?php
	include('../php/config/config.php');
	if(isset($_POST['txtIdUsuario']) && !empty($_POST['txtIdUsuario'])){ $id = $_POST['txtIdUsuario']; $sql = "DELETE FROM usuario WHERE id_usuario='$id'"; }
	$resp = mysqli_query($link, $sql) or die(mysqli_error($link)); 
	include('busquedaUsuario.php');
?>