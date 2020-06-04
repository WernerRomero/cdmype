<?php
	include('../php/config/config.php');
	$horarios = isset($_POST['horario']) ? $_POST['horario'] : '' ;
	$sql = mysqli_query($link, "select 
									ciclo.id_ciclo, 
									ciclo.nombre_del_ciclo, 
									nivel.id_nivel, 
									nivel.nombre_del_nivel, 
									sub_nivel.id_sub_nivel, 
									sub_nivel.nombre_del_sub_nivel, 
									dia.id_dia, 
									dia.nombre_del_dia, 
									horario.id_horario, 
									horario.inicio_clase, 
									horario.fin_clase, 
									horario.inicio_fin_clase, 
									horario.id_dia2 
								from horario 
									inner join ciclo on horario.id_ciclo = ciclo.id_ciclo 
									inner join sub_nivel on horario.id_sub_nivel = sub_nivel.id_sub_nivel 
									inner join nivel on sub_nivel.id_nivel = nivel.id_nivel 
									inner join dia on horario.id_dia = dia.id_dia 
								where nombre_del_sub_nivel like '%$horarios%'  ") or die(mysqli_error($link));
?>