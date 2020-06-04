<?php
	include('../php/config/config.php');
	$cbociclo	= isset($_POST['cbociclo']) ? $_POST['cbociclo'] : ''; $cbonivel	= isset($_POST['cbonivel']) ? $_POST['cbonivel'] : ''; $cbodiauno	= isset($_POST['cbodia']) ? $_POST['cbodia'] : ''; $cbodiados	= isset($_POST['cbodiados']) ? $_POST['cbodiados'] : ''; $inicio		= isset($_POST['txtnomInicio']) ? $_POST['txtnomInicio'] : ''; $fin		= isset($_POST['txtnomFin']) ? $_POST['txtnomFin'] : ''; $inicio_fin=$inicio.' - '.$fin;
	if(isset($_POST['txtIdHorario']) && !empty($_POST['txtIdHorario'])){ 
		$id = $_POST['txtIdHorario']; 
		$sql = "UPDATE horario  SET 
									id_ciclo='$cbociclo', 
									id_sub_nivel='$cbonivel', 
									id_dia='$cbodiauno', 
									inicio_clase='$inicio', 
									fin_clase= '$fin', 
									inicio_fin_clase='$inicio_fin', 
									id_dia2='$cbodiados' 
				WHERE id_horario='$id'"; 
		}else{ $sql = "INSERT INTO horario VALUES( '', '$cbociclo', '$cbonivel', '$cbodiauno', '$inicio', '$fin', '$inicio_fin', '$cbodiados' )"; 
	}
	$resp = mysqli_query($link, $sql) or die(mysqli_error($link)); 
	include('busquedaHorario.php');
?>