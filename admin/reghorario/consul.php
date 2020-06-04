<?php
	include('../php/config/config.php');
	$sqlciclo = mysqli_query($link, "select id_ciclo, nombre_del_ciclo from ciclo"); 
	$ciclo = mysqli_fetch_all($sqlciclo, MYSQLI_ASSOC);

	$sqlsubnivel = mysqli_query($link, "select id_sub_nivel, nombre_del_sub_nivel from sub_nivel"); 
	$subnivel = mysqli_fetch_all($sqlsubnivel, MYSQLI_ASSOC);

	$sqldia = mysqli_query($link, "select id_dia, nombre_del_dia from dia"); 
	$dia = mysqli_fetch_all($sqldia, MYSQLI_ASSOC);
?>