<?php
	include('../php/config/config.php');

	$cod = isset($_POST['txtCod']) ? $_POST['txtCod'] : '';
	$cod_cliente="";
	//$sql = mysqli_query($link, " select cliente.id_cliente, cliente.cod_del_cliente, cobro.cod_cliente from cobro inner join cliente on cobro.` id_cliente` = cliente.id_cliente where cod_del_cliente = '$cod' ");
	$sql = mysqli_query($link, "select cliente.id_cliente, cliente.cod_del_cliente from cliente where cod_del_cliente = '$cod' ");
	$datos = mysqli_fetch_all($sql, MYSQLI_ASSOC);

	foreach ($datos as $row) { 
		$id_cliente = $row['id_cliente'];
		$cod_cliente = $row['cod_del_cliente'];
	} 

	$id_factura = isset($_POST['cbofac']) ?$_POST['cbofac'] : '';

	$sql2=mysqli_query($link, " select id_factura, abreviacion from tipo_factura where id_factura = '$id_factura' ");
	$datos2=mysqli_fetch_all($sql2, MYSQLI_ASSOC);
	foreach ($datos2 as $row) { $tipo = $row['abreviacion']; }

	$consulta = mysqli_query($link, "select * from cobro");
	$count=mysqli_num_rows($consulta)+1;

	
	$cod_fatu = isset($_POST['txtcod_fatu']) && !empty( $_POST['txtcod_fatu']) ? $_POST['txtcod_fatu'] : $tipo.'-'.$count;

	$id_horario = '1';

	$money = isset($_POST['txtsuma']) ? $_POST['txtsuma'] : ''; 
	list($num, $text) = split('[/.,-]', $money);
	$cantidad_num = $num;
	$cantidad_text = $text;
	$concepto = isset($_POST['txtconcepto']) ? $_POST['txtconcepto'] : '';
	$fecha = isset($_POST['txtfecha']) ? $_POST['txtfecha'] : '';

	$id_cuota = '1';

	$recibi = isset($_POST['txtnombre']) ? $_POST['txtnombre'] : '';

if($cod == $cod_cliente){
	if(isset($_POST['txtIdCobro']) && !empty($_POST['txtIdCobro'])){ 
		$id = $_POST['txtIdCobro']; 
		$sql = "
		UPDATE cobro 
		SET 
			 cod_cliente = '$cod_cliente',
			 cod_factura = '$cod_fatu',
			 id_factura = '$id_factura',
			 id_horario = '$id_horario',
			 cantidad_num = '$cantidad_num',
			 cantidad_text = '$cantidad_text',
			 en_concepto_de = '$concepto',
			 fecha_cobro = '$fecha',
			 id_cuota = '$id_cuota',
			 recibi = '$recibi'
		WHERE id_cobro='$id'"; 
	}else{ 
		$sql = " 
			INSERT INTO cobro 
			VALUES('','$id_cliente', '$cod_cliente', '$cod_fatu',
					'$id_factura', '$id_horario', '$cantidad_num',
					'$cantidad_text', '$concepto','$fecha','$id_cuota','$recibi')";
	}

	$resp = mysqli_query($link, $sql) or die(mysqli_error($link)); //'<h1 class="error">Error! No Puedes hacer esta accion, Posible solucion: Codigo de Usuario invalido, Por favor recarga la pagina </h1> 
	
	include('divPrint.php');

}

	include('busquedaCobro.php');
?>