<?php
	include("../php/config/config.php");
	$sql = mysqli_query($link, "select id_factura, nombre_factura, abreviacion from tipo_factura");
	$datos = mysqli_fetch_all($sql, MYSQLI_ASSOC);
?>