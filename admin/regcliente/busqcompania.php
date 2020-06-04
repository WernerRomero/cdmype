<?php
	include("../php/config/config.php");
	$sql = mysqli_query($link, "select id_compania, nombre_compania from compania");
	$datos = mysqli_fetch_all($sql, MYSQLI_ASSOC);
?>