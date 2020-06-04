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
					<form action="javascript: registrarSubNivel()" name="frmRegsubnivel" id="frmRegsubnivel" onReset="javascript: limpiar()">
						<input type="hidden" name="txtIdSubNivel" id="txtIdSubNivel">
						<!-- *************************************** Registro de Ciclos *************************************** -->
						<div class="row"> <div class="col-xs-12"> <legend><h1>Formulario de Registro de Sub Niveles</h1></legend> </div> </div>

						<div class="row">
							<div class="col-xs-12 col-sm-4">
							  <div class="form-group">
									<label for="Nivel" class="control-label">Niveles</label> <?php include('busqnivel.php');?>
									<select name="cbonivel" id="cbonivel" class="form-control"> <?php foreach ($datos as $row) { echo '<option value="'.$row['id_nivel'].'">'.$row['nombre_del_nivel'].'</option>'; } ?> </select>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4">
								<label for="Codigo" class="control-label">Nombre del Sub-Nivel</label>
								<input type="text" name="txtnomSubNivel" id="txtnomSubNivel" class="form-control" placeholder="L1, L2, L3, L4, ..." required>
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
							<legend><h1>Tabla de Sub-Niveles Registrados</h1></legend> 
						</div> 
					</div>
					<p class="btnp hidden-print"> 
						Buscar por Sub nivel: 
						<input type="text" name="txtBuscar" id="txtBuscar" onKeyUp="buscarSubNivel(this.value)"> 
						&nbsp &nbsp &nbsp
						<a href="javascript: window.print();" class="btn btn-info">Imprimir</a>
					</p>
					<div id="RespBusquedaSubNivel"> <?php include('busquedaSubNivel.php'); ?> </div>
				</div>
				<?php include('../php/modal.php'); ?>
			</div>
		</div>

		<?php include '../inc/footer.inc'; ?>
		<?php include '../inc/footer_common2.inc'; ?>
		<script src="principal.js"></script>
	</body>
</html>