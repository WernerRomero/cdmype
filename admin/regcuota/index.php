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
					<form action="javascript: registrarCuota()" name="frmRegcuota" id="frmRegcuota" onReset="javascript: limpiar()">
						<input type="hidden" name="txtIdCuota" id="txtIdCuota">
						<!-- *************************************** Registro de Cuota *************************************** -->
						<div class="row"> <div class="col-xs-12"> <legend><h1>Formulario de Registro de Cuotas</h1></legend> </div> </div>
						<?php include('busqcuota.php'); ?>

						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<label class="control-label">Seleccione Un Ciclo</label>
								<select name="cbociclo" id="cbociclo" class="form-control"> <?php foreach ($ciclo as $row) { echo '<option value="'.$row['id_ciclo'].'">'.$row['nombre_del_ciclo'].'</option>'; } ?> </select>
							</div>
							<div class="col-xs-12 col-sm-6">
								<label for="Codigo" class="control-label">Numero de Cuota</label>
								<input type="text" name="txtnumCuota" id="txtnumCuota" class="form-control" placeholder="Cuota N° 1, Cuota #2, ..." required>
							</div>

						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<label for="Codigo" class="control-label">Fecha de la Proxima Cuota</label>
								<input type="date" name="txtFecha" id="txtFecha" class="form-control"required>
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
					<div class="row"> <div class="col-xs-12"> <legend><h1>Tabla de Cuotas Registrados</h1></legend> </div> </div>
					<p class="btnp hidden-print"> 
						Buscar Nombre-Cuota:  
						<input type="text" name="txtBuscar" id="txtBuscar" onKeyUp="buscarCuota(this.value)"> 
						&nbsp &nbsp &nbsp
						<a href="javascript: window.print();" class="btn btn-info">Imprimir</a>
					</p>
					<div id="RespBusquedaCuota"> <?php include('busquedaCuota.php'); ?> </div>
				</div>
				<?php include('../php/modal.php'); ?>
			</div>
		</div>

		<?php include '../inc/footer.inc'; ?>
		<?php include '../inc/footer_common2.inc'; ?>
		<script src="principal.js"></script>
	</body>
</html>