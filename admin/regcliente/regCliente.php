<?php
	include('../php/config/config.php');

	$consulta = mysqli_query($link, "select * from cliente");
	$count=mysqli_num_rows($consulta)+1;	

	$fecha_reg					= isset($_POST['txtfecharegistro']) ? $_POST['txtfecharegistro'] : ''; 
	$nombre_cliente	 			= isset($_POST['txtnomcliente']) ? $_POST['txtnomcliente'] : ''; 
	$apellido_cliente	 		= isset($_POST['txtapecliente']) ? $_POST['txtapecliente'] : ''; 
	$direccion_cliente 			= isset($_POST['txtdireccioncliente']) ? $_POST['txtdireccioncliente'] : ''; 
	$municipio		 			= isset($_POST['txtmunicipio']) ? $_POST['txtmunicipio'] : ''; 
	$tel_clicente		 		= isset($_POST['txttelcliente']) ? $_POST['txttelcliente'] : '';
	$celular 					= isset($_POST['txtcelcliente']) ? $_POST['txtcelcliente'] : '';
	$compania_cliente			= isset($_POST['cbocompania']) ? $_POST['cbocompania'] : '';
	$fecha_nacimiento_cliente	= isset($_POST['txtfechanacimiento']) ? $_POST['txtfechanacimiento'] : '';
	$email_cliente				= isset($_POST['txtemail']) ? $_POST['txtemail'] : '';
	$trabajo 					= isset($_POST['opcion']) ? $_POST['opcion'] : 'no';
	$instituto_procede			= isset($_POST['txtinstituto']) ? $_POST['txtinstituto'] : '';


	if(isset($_POST['txtIdCliente']) && !empty($_POST['txtIdCliente'])){ 
		$id = $_POST['txtIdCliente']; 
		$sql = "UPDATE cliente SET 
					nombre_cliente='$nombre_cliente', 
					apellido_cliente='$apellido_cliente', 
					direccion_cliente='$direccion_cliente', 
					municipio='$municipio',
					tel_clicente='$tel_clicente', 
					celular='$celular', 
					id_compania='$compania_cliente', 
					fecha_nacimiento_cliente='$fecha_nacimiento_cliente', 
					email_cliente='$email_cliente', 
					trabajo='$trabajo',
					instituto_procede='$instituto_procede' 
				WHERE id_cliente='$id'"; 
	}else{ 
		list($anio, $mes, $dias)=split('[/.-]', $fecha_reg);
		$newanio = substr($anio, -2);
		$Codcliente = 'ai-'.'0'.$count.$newanio;

		$sql = "INSERT INTO cliente VALUES( 
						'',	
						'$Codcliente', 
						'$fecha_reg', 
						'$nombre_cliente', 
						'$apellido_cliente', 
						'$direccion_cliente', 
						'$municipio',
						'$tel_clicente', 
						'$celular', 
						'$compania_cliente', 
						'$fecha_nacimiento_cliente', 
						'$email_cliente', 
						'$trabajo',
						'$instituto_procede' )"; 
	}
	$resp = mysqli_query($link, $sql) or die(mysqli_error($link));

	$trabajo=='si' ? include('regtrabajo.php') : include('regedad.php');
	
	include('divPrint.php');
	
	include('busquedaCliente.php');
?>