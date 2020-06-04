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
		
		<div class="container inicio "> <!-- hidden-print -->
			<div class="row hidden-print">
				<form action="javascript: registrarCobro()" name="frmRegcobro" id="frmRegcobro" onReset="javascript: limpiar()">
					<input type="hidden" name="txtIdCobro" id="txtIdCobro">
					<input type="hidden" name="txtcod_fatu" id="txtcod_fatu">
					<!-- *************************************** Reg factura *************************************** -->
					<div class="row"> 
						<div class="col-xs-12"> 
							<legend>
								<h1>Formulario de Registro de Cobro</h1>
							</legend> 
						</div> 
					</div>

					<div classs="row">
						<div class="col-xs-12 col-sm-6">
							<label for="fecha" class="control-label">Fecha de facturacion: </label>
							<input type="date" name="txtfecha" id="txtfecha" class="form-control" required>
						</div>
						<div class="col-xs-12 col-sm-6">
							<label for="Tfactura" class="control-label">Tipo de Factura</label> <?php include('busqTfactura.php');?>
							<select name="cbofac" id="cbofac" class="form-control"> 
								<?php 
									foreach ($datos as $row) { 
										echo '<option value="'.$row['id_factura'].'">'.$row['nombre_factura'].'</option>'; 
									} 
								?> 
							</select>
						</div>
					</div>


					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<label for="nombre" class="control-label">Recibí de: </label>
							<input type="text" name="txtnombre" id="txtnombre" class="form-control" placeholder="Nombre del Cliente" required>
						</div>
						<div class="col-xs-12 col-sm-6">
							<label for="Suma" class="control-label">La suma de: </label>
							<input type="text" name="txtsuma" id="txtsuma" class="form-control" placeholder="$10, Diez Dolares" required>
						</div>
					</div>

					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<label for="Concepto" class="control-label">En concepto de: </label>
							<input type="text" name="txtconcepto" id="txtconcepto" class="form-control" placeholder="Matricula, Compra de un libro, ..." required>
						</div>
						<div class="col-xs-12 col-sm-6">
							<label for="nombre" class="control-label">Codigo del Estudiante</label>
							<input type="text" name="txtCod" id="txtCod" class="form-control" placeholder="AI-001" required>
						</div>
					</div>

					<div class="row">
						<div class="col-xs-12 col-sm-6 col-sm-offset-3">
							<label for="Codigo" class="control-label">Guardar e Imprimir</label>
							<input type="submit" class="form-control btn btn-default" value="Guardar / Imprimir">
						</div>
					</div>
				</form>
			</div>
			
			
			<div class="row">
				<div class="col-xs-12">
					<div class="row hidden-print"> <div class="col-xs-12"> <legend><h1>Tabla de los Cobros Registrados</h1></legend> </div> </div>
					<p class="btnp hidden-print"> Buscar por Codigo del Alumno:  <input type="text" name="txtBuscar" id="txtBuscar" onKeyUp="buscarCobro(this.value)"> </p>
					<div id="RespBusquedaCobro"> <?php include('busquedaCobro.php'); ?> </div>
				</div>
				<?php include('../php/modal.php'); ?>
			</div>
		</div>

		<?php include '../inc/footer.inc'; ?>
		<?php include '../inc/footer_common2.inc'; ?>
		<script src="principal.js"></script>
	</body>
</html>