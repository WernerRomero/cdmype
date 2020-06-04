<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<?php include '../inc/head_common2.inc'; ?>
		<link rel="stylesheet" href="../css/bgColor.css">
		
		<title>Academia Internacional</title>
	</head>
	<body>
		<?php include '../inc/header2.inc'; ?>
		
		<div class="container inicio">
			<div class="row">
				<div class="col-xs-12">
					<form action="javascript: registroUsuario()" name="frmRegUsuario" id="frmRegUsuario" onReset="javascript: limpiar()">
						<input type="hidden" name="txtIdUsuario" id="txtIdUsuario">
						<!-- *************************************** Registro de Usurio *************************************** -->
						<div class="row"> <div class="col-xs-12"> <legend><h1>Formulario de Registro de Usuario</h1></legend> </div> </div>
						
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<label for="Codigo" class="control-label">Nombre del Usuario</label>
								<input type="text" name="txtnombre" id="txtnombre" class="form-control" placeholder="Primer Nombre" required>
							</div>
							<div class="col-xs-12 col-sm-6">
								<label for="Codigo" class="control-label">Apellido del Usuario</label>
								<input type="text" name="txtapellido" id="txtapellido" class="form-control" placeholder="Primer Apellido" required>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<label for="Codigo" class="control-label">Usuario</label>
								<input type="text" name="txtuser" id="txtuser" class="form-control" placeholder="Nombre del Usuario" required>
							</div>
							<div class="col-xs-12 col-sm-6">
								<label for="Codigo" class="control-label">Contraseña</label>
								<input type="text" name="txtpassword" id="txtpassword" class="form-control" placeholder="Contraseña" required>
							</div>
						</div>


						<div class="row">
							<div class="col-xs-12 col-sm-12">
								<div class="col-xs-12 col-sm-6">
									<label for="Codigo" class="control-label">Tipo de Usuario</label>
									<select name="cbotipo" id="cbotipo" class="form-control"> 
										<option value="admin">Administrador</option>
										<option value="user">Usuario</option>
										<option value="docente">Docente</option>
									</select>
								</div>
								<div class="col-xs-12 col-sm-6">
									<label for="Codigo" class="control-label">Enviar Datos</label>
									<input type="submit" class="form-control btn btn-default" value="Guardar">
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12">
					<div class="row"> <div class="col-xs-12"> <legend><h1>Tabla de Usuarios Registrados</h1></legend> </div> </div>
					<p class="btnp"> Buscar por Nombre:  <input type="text" name="txtBuscar" id="txtBuscar" onKeyUp="buscarUsuario(this.value)"> </p>
					<div id="RespBusquedaUsuario"> <?php include('busquedaUsuario.php'); ?> </div>
				</div>

				<?php include('../php/modal.php'); ?>
			</div>
		</div>
		

		<?php include '../inc/footer.inc'; ?>
		<?php include '../inc/footer_common2.inc'; ?>
		<script src="principal.js"></script>
	</body>
</html>