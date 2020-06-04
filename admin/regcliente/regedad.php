<?php
	$nombre_representante		= isset($_POST['txtnombreRepre']) ? $_POST['txtnombreRepre'] : '';
	$parentesco					= isset($_POST['txtparentesco']) ? $_POST['txtparentesco'] : '';
	$lugar_trabajo				= isset($_POST['txtlugartrabajo']) ? $_POST['txtlugartrabajo'] : '';
	
	$tel_casa_repre				= isset($_POST['txttelcasa']) ? $_POST['txttelcasa'] : '';
	$tel_trabajo_repre			= isset($_POST['txtteltrabajo']) ? $_POST['txtteltrabajo'] : '';
	$celular_repre				= isset($_POST['txtcelRepre']) ? $_POST['txtcelRepre'] : '';	

	$sql = mysqli_query($link, "select id_cliente, cod_del_cliente from cliente where cod_del_cliente='$Codcliente' ");
	$datos = mysqli_fetch_all($sql, MYSQLI_ASSOC);

	foreach ($datos as $row) {
		$ide=$row['id_cliente'];
	}

	if(isset($_POST['txtIdCliente']) && !empty($_POST['txtIdCliente'])){
		$idedad=$_POST['txtIdCliente'];
		$sqledad="UPDATE representante SET 
			nombre_repre='$$nombre_representante',
			parentesco='$parentesco',
			lugar_trabajo='$lugar_trabajo',
			tel_casa_repre='$tel_casa_repre',
			tel_trabajo_repre='$tel_trabajo_repre',
			celular_repre='$celular_repre'
			WHERE id_cliente='$idedad' ";
	}else{ $sqledad="INSERT INTO representante VALUES(
		'$ide', 
		'$nombre_representante', 
		'$parentesco', 
		'$lugar_trabajo',  
		'$tel_casa_repre', 
		'$tel_trabajo_repre', 
		'$celular_repre')"; 
	}
	$respedad=mysqli_query($link, $sqledad) or die(mysqli_error($link));
?>