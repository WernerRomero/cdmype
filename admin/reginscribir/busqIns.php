<?php 
	include('../php/config/config.php');
	$inscrito = isset($_POST['inscrito']) ? $_POST['inscrito'] : '' ;
	$sql = mysqli_query($link, "select 
									inscripcion.id_inscripcion,
									cliente.id_cliente,
									cliente.cod_del_cliente,
									cliente.nombre_cliente,
									cliente.apellido_cliente,
									horario.id_horario,

									sub_nivel.nombre_del_sub_nivel,
									horario.id_sub_nivel,
									horario.id_dia,
									dia.nombre_del_dia,

									horario.id_dia2,
									horario.inicio_fin_clase

								from inscripcion 
									inner join cliente on inscripcion.id_cliente = cliente.id_cliente
									inner join horario on inscripcion.id_horario = horario.id_horario
									inner join sub_nivel on horario.id_sub_nivel = sub_nivel.id_sub_nivel
									inner join dia on horario.id_dia = dia.id_dia
								where nombre_del_sub_nivel like '%$inscrito%' ") or die(mysqli_error($link));
?>