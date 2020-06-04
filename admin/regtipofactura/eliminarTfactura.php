<?php
	include('../php/config/config.php');
	if(isset($_POST['txtIdTipoFactura']) && !empty($_POST['txtIdTipoFactura'])){ $id = $_POST['txtIdTipoFactura']; $sql = "DELETE FROM tipo_factura WHERE id_factura='$id'"; }
	$resp = mysqli_query($link, $sql) or die(mysqli_error($link)); 
	include('busquedaTfactura.php');
?>