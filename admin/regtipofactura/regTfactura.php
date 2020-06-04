<?php
	include('../php/config/config.php');
	$tipo = isset($_POST['txtnomTipoFactura']) ? $_POST['txtnomTipoFactura'] : '';  $abre = isset($_POST['txtabreTipoFactura']) ? $_POST['txtabreTipoFactura'] : ''; 
	if(isset($_POST['txtIdTipoFactura']) && !empty($_POST['txtIdTipoFactura'])){ 
		$id = $_POST['txtIdTipoFactura']; 
		$sql = "UPDATE tipo_factura  SET 
										nombre_factura='$tipo', 
										abreviacion='$abre' 
				WHERE id_factura='$id' "; 
	}else{ 
		$sql = "INSERT INTO tipo_factura VALUES('','$tipo', '$abre')"; 
	}
	$resp = mysqli_query($link, $sql) or die(mysqli_error($link)); 
	include('busquedaTfactura.php');
?>