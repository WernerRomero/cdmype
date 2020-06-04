<?php
	include("../php/config/config.php");
	$sql = mysqli_query($link, "select id_ciclo, nombre_del_ciclo from ciclo");
	$ciclo = mysqli_fetch_all($sql, MYSQLI_ASSOC);
?>