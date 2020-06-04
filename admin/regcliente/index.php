<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<?php include '../inc/head_common2.inc'; ?>
		<link rel="stylesheet" href="../css/bgColor.css">
		<link rel="stylesheet" href="print.css">
		
		<title>Academia Internacional</title>
	</head>
	<body>
		<?php include '../inc/header2.inc'; ?>
		
		<div class="container inicio">
			<div class="row hidden-print">
				<div class="col-xs-12">
					<h1 class="center">Registros de Clientes</h1>
					<form action="javascript: registroCliente()" name="frmRegCliente" id="frmRegCliente" onReset="javascript: limpiar()">
						<input type="hidden" name="txtIdCliente" id="txtIdCliente" <?php echo $value="value="; ?> >
						<!-- *************************************** Datos Personales *************************************** -->
						<div class="row"> <div class="col-xs-12"> <legend>Datos Personales</legend> </div> </div>
						
						<div class="row">
							<div class="col-xs-12 col-sm-4 col-sm-offset-1">
							 	<div class="form-group">
									<label for="fecha" class="control-label">Fecha de Inscripcion</label>
									<input type="date" name="txtfecharegistro" id="txtfecharegistro" class="form-control" required>
							  	</div>
							</div>
							<div class="col-xs-12 col-sm-4 col-sm-offset-2">
								<div class="form-group">
									<label for="fechanacimiento" class="control-label">Fecha de Nacimiento</label>
                					<input type="date" name="txtfechanacimiento" id="txtfechanacimiento" class="form-control" required>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<label for="nombre" class="control-label">Nombre del Solicitante</label>
								<input type="text" name="txtnomcliente" id="txtnomcliente" class="form-control" placeholder="Nombre del Solicitante" required>
							</div>
							<div class="col-xs-12 col-sm-6">
								<label for="nombre" class="control-label">Apellido del Solicitante</label>
								<input type="text" name="txtapecliente" id="txtapecliente" class="form-control" placeholder="Apellido del Solicitante" required>
							</div>
						</div>

						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<label for="direccion" class="control-label">Dirección</label>
								<textarea id="txtdireccioncliente" name="txtdireccioncliente" class="form-control" rows="1" placeholder="Usulutal, El salvador..."></textarea>
							</div>
							<div class="col-xs-12 col-sm-6">
								<label for="municipio" class="control-label">Municipio</label>
								<input type="text" name="txtmunicipio" id="txtmunicipio" class="form-control" placeholder="Santiago de Maria, Jiquilisco, ..." required>
							</div>
						</div>

						<div class="row">
							<div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label for="telefono" class="control-label">Telefono</label>
                					<input type="text" name="txttelcliente" id="txttelcliente" class="form-control" placeholder="2600-3822" maxlength="9" pattern="[0-9]{4}-[0-9]{4}" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
								</div>
							</div>
							<div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label for="celular" class="control-label">Celular</label>
                					<input type="text" id="txtcelcliente" name="txtcelcliente" class="form-control" placeholder="7302-6742" maxlength="9" pattern="[0-9]{4}-[0-9]{4}" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
								</div>
			                </div>
							<div class="col-xs-12 col-sm-4">
							  <div class="form-group">
									<label  class="control-label">Compañia</label> <?php include('busqcompania.php'); ?>
									<select name="cbocompania" id="cbocompania" class="form-control"> <?php foreach ($datos as $row) { echo '<option value="'.$row['id_compania'].'">'.$row['nombre_compania'].'</option>'; } ?> </select>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label for="email" class="control-label">E-mail</label>
                					<input type="email" id="txtemail" name="txtemail" class="form-control" placeholder="ejemplo@gmail.com">
								</div>
			                </div>
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label for="instituto" class="control-label">Instituto en Donde Estudia</label>
                					<input type="text" id="txtinstituto" name="txtinstituto" class="form-control" placeholder="INU, INE, INCB, ...">
								</div>
			                </div>
						</div>
						
						<br>
						<!-- *************************************** Controles *************************************** -->
						<div class="row"> <div class="col-xs-12"> <legend>¿Trabaja el Cliente o Es menor de Edad?</legend> </div> </div>
						
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<div class="radio"> 
									<label> 
										<input type="radio" name="opcion" id="opcedad" value="no" onClick="javascript: mostrar('#divedad'), cerrar('#divtrabajo')" > 
										Menor de Edad 
									</label> 
								</div> 
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="radio">
									<label>
						                <input type="radio" name="opcion" id="opctrabajo" value="si" onClick="javascript: mostrar('#divtrabajo'), cerrar('#divedad')" >
						                Trabajo
						            </label>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-xs-12 col-sm-12">
								<div id="divedad" class="apps"> <?php include('edad.php'); ?> </div>
								<div id="divtrabajo" class="apps"> <?php include('trabajo.php'); ?> </div>
							</div>
						</div>
					</form>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12">
					<div class="row hidden-print"> 
						<div class="col-xs-12"> <legend><h1>Tabla de Usuarios Registrados</h1></legend> 
						</div> 
					</div>
					<p class="btnp hidden-print"> 
						Buscar por Codigo:  
						<input type="text" name="txtBuscar" id="txtBuscar" onKeyUp="buscarCliente(this.value)"> 
					</p>
					<div id="RespBusquedaCliente"> <?php include('busquedaCliente.php'); ?> </div>
				</div>

				<?php include('../php/modal.php'); ?>
			</div>
		</div>
		

		<?php include '../inc/footer.inc'; ?>
		<?php include '../inc/footer_common2.inc'; ?>
		<script src="principal.js"></script>
	</body>
</html>