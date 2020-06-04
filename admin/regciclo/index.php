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
					<form action="javascript: registrarCiclo()" name="frmRegciclo" id="frmRegciclo" onReset="javascript: limpiar()">
						<input type="hidden" name="txtIdCiclo" id="txtIdCiclo">
						<!-- *************************************** Registro de Ciclos *************************************** -->
						<div class="row"> <div class="col-xs-12"> <legend><h1>Formulario de Registro de Ciclos</h1></legend> </div> </div>
						
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<label for="Codigo" class="control-label">Nombre del Ciclo</label>
								<input type="text" name="txtnomCiclo" id="txtnomCiclo" class="form-control" placeholder="Ciclo I 2015, Ciclo II 2015, Ciclo I ..." required>
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
							<legend><h1>Tabla de Ciclos Registrados</h1></legend>
						</div> 
					</div>
					<p class="btnp hidden-print"> 
						Buscar Ciclo:  
						<input type="text" name="txtBuscar" id="txtBuscar" onKeyUp="buscarCiclo(this.value)"> 
						&nbsp &nbsp &nbsp
						<a href="javascript: window.print();" class="btn btn-info">Imprimir</a>
					</p>
					<div id="RespBusquedaCiclo"> <?php include('busquedaCiclo.php'); ?> </div>
				</div>
				<?php include('../php/modal.php'); ?>
			</div>
		</div>

		<?php include '../inc/footer.inc'; ?>
		<?php include '../inc/footer_common2.inc'; ?>
		<script src="principal.js"></script>
	</body>
</html>