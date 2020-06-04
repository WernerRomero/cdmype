<?php
	include("../php/config/config.php");
	$sql = mysqli_query($link, "select 
									horario.id_sub_nivel, 
									sub_nivel.nombre_del_sub_nivel, 
									sub_nivel.id_nivel, 
									nivel.nombre_del_nivel, 
									horario.id_dia, 
									dia.nombre_del_dia, 
									horario.id_dia2,
									horario.inicio_fin_clase
								from horario 
									inner join sub_nivel on horario.id_sub_nivel=sub_nivel.id_sub_nivel 
									inner join nivel on sub_nivel.id_nivel=nivel.id_nivel 
									inner join dia on horario.id_dia=dia.id_dia ");
	$datos = mysqli_fetch_all($sql, MYSQLI_ASSOC);
?>