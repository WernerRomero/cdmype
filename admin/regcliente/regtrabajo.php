<?php
	$lugar_de_trabajo			= isset($_POST['txtlugardetrabajo']) ? $_POST['txtlugardetrabajo'] : '';
	$direccion_trabajo			= isset($_POST['txtdirecciondetrabajo']) ? $_POST['txtdirecciondetrabajo'] : '';
	$cargo_trabajo				= isset($_POST['txtcargo']) ? $_POST['txtcargo'] : '';
	$telefono					= isset($_POST['txtteldetrabajo']) ? $_POST['txtteldetrabajo'] : '';

	$sql = mysqli_query($link, "select id_cliente, cod_del_cliente from cliente where cod_del_cliente='$Codcliente' ");
	$datos = mysqli_fetch_all($sql, MYSQLI_ASSOC);

	foreach ($datos as $row) {
		$idt=$row['id_cliente'];
		if($row['cod_del_cliente']==$Codcliente){
			if(isset($_POST['txtIdCliente']) && !empty($_POST['txtIdCliente'])){
				$idtrabajo=$_POST['txtIdCliente'];
				$sqltrabajo="UPDATE trabajo SET 
							lugar_de_trabajo='$lugar_de_trabajo', 
							direccion_trabajo='$direccion_trabajo', 
							cargo_trabajo='$cargo_trabajo', 
							telefono='$telefono' 
							WHERE id_cliente='$idtrabajo' ";
			}else{
				$sqltrabajo="INSERT INTO trabajo VALUES(
					'$idt',
					'$lugar_de_trabajo', 
					'$direccion_trabajo', 
					'$cargo_trabajo', 
					'$telefono') "; 
			}
			$resptrabajo=mysqli_query($link, $sqltrabajo) or die(mysqli_error($link));
		}
	}
?>