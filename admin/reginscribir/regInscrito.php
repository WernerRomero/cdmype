<?php
	include('../php/config/config.php');
	$codcliente = strtolower(isset($_POST['txtCodigo']) ? $_POST['txtCodigo'] : ''); 
	$cboHorario = isset($_POST['cboHorario']) ? $_POST['cboHorario'] : ''; 

	$sqlcliente = mysqli_query($link, "select id_cliente, cod_del_cliente from cliente where cod_del_cliente='$codcliente' "); 
	$cliente = mysqli_fetch_all($sqlcliente, MYSQLI_ASSOC);

	foreach ($cliente as $row) {
		$idCliente = $row['id_cliente'];
		if($row['cod_del_cliente']==$codcliente){
			if(isset($_POST['txtIdInscribir']) && !empty($_POST['txtIdInscribir'])){ 
				$id = $_POST['txtIdInscribir']; 
				$sql = "UPDATE inscripcion SET 
											id_cliente = '$idCliente', 
											id_horario ='$cboHorario' 
						WHERE id_inscripcion='$id'"; 
			}else{ 
				$sql = "INSERT INTO inscripcion VALUES('','$idCliente','$cboHorario')"; 
			}$resp = mysqli_query($link, $sql) or die(mysqli_error($link)); 
		} else{echo 'Codigo Incorrecto'; }
		
	}
	include('busquedaInscrito.php');
?>