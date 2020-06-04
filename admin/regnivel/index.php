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
			<div class="row hidden-print">
				<div class="col-xs-12">
					<form action="javascript: registrarNivel()" name="frmRegnivel" id="frmRegnivel" onReset="javascript: limpiar()">
						<input type="hidden" name="txtIdNivel" id="txtIdNivel">
						<!-- *************************************** Registro de Niveles *************************************** -->
						<div class="row"> <div class="col-xs-12"> <legend><h1>Formulario de Registro de Niveles</h1></legend> </div> </div>
						
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<label for="Codigo" class="control-label">Nombre del Nivel</label>
								<input type="text" name="txtnomNivel" id="txtnomNivel" class="form-control" placeholder="Nivel A1, Nivel A2, Nivel ...">
							</div>
							<div class="col-xs-12 col-sm-6">
								<label for="Codigo" class="control-label">Enviar Datos</label>
								<input type="submit" class="form-control btn btn-default" value="Guardar">
							</div>
						</div>
					</form>
				</div>
			</div>
			
			<div class="row">
				<div class="col-xs-12">
					<div class="row"> 
						<div class="col-xs-12"> 
							<legend><h1>Tabla de Niveles Registrados</h1></legend>	 
						</div> 
					</div>
					<p class="btnp hidden-print"> 
						Buscar Nivel:  
						<input type="text" name="txtBuscar" id="txtBuscar" onKeyUp="buscarNivel(this.value)"> 
						&nbsp &nbsp &nbsp
						<a href="javascript: window.print();" class="btn btn-info">Imprimir</a>
					</p>
					<div id="RespBusquedaNivel"> <?php include('busquedaNivel.php'); ?> </div>
				</div>
				<?php include('../php/modal.php'); ?>
			</div>
		</div>

		<?php include '../inc/footer.inc'; ?>
		<?php include '../inc/footer_common2.inc'; ?>
		<script src="principal.js"></script>
	</body>
</html>