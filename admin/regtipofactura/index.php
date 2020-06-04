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
					<form action="javascript: registrarTipoFactura()" name="frmRegTipoFactura" id="frmRegTipoFactura" onReset="javascript: limpiar()">
						<input type="hidden" name="txtIdTipoFactura" id="txtIdTipoFactura">
						<!-- *************************************** Registro de Factura *************************************** -->
						<div class="row"> <div class="col-xs-12"> <legend><h1>Formulario de Registro de Facturas</h1></legend> </div> </div>
						
						<div class="row">
							<div class="col-xs-12 col-sm-4">
								<label for="Codigo" class="control-label">Nombre de Tipo de Factura</label>
								<input type="text" name="txtnomTipoFactura" id="txtnomTipoFactura" class="form-control" placeholder="Matricula, Mensualidad, Libros, ..." required>
							</div>
							<div class="col-xs-12 col-sm-4">
								<label for="Codigo" class="control-label">Abreviacion de Tipo de Factura</label>
								<input type="text" name="txtabreTipoFactura" id="txtabreTipoFactura" class="form-control" placeholder="MA, ME, LI, ..." required>
							</div>
							<div class="col-xs-12 col-sm-4">
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
							<legend><h1>Tabla de Tipos de Facturas</h1></legend> 
						</div> 
					</div>
					<p class="btnp hidden-print"> 
						Buscar Abreviacion:  
						<input type="text" name="txtBuscar" id="txtBuscar" onKeyUp="buscarTfactura(this.value)"> 
						&nbsp &nbsp &nbsp
						<a href="javascript: window.print();" class="btn btn-info">Imprimir</a>
					</p>
					<div id="RespBusquedaTfactura"> <?php include('busquedaTfactura.php'); ?> </div>
				</div>
				<?php include('../php/modal.php'); ?>
			</div>
		</div>

		<?php include '../inc/footer.inc'; ?>
		<?php include '../inc/footer_common2.inc'; ?>
		<script src="principal.js"></script>
	</body>
</html>