<?php
	include("../php/config/config.php");
	$sql = mysqli_query($link, "select id_nivel, nombre_del_nivel from nivel");
	$datos = mysqli_fetch_all($sql, MYSQLI_ASSOC);
?>