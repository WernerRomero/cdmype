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
					<form action="javascript: registrarHorario()" name="frmReghorario" id="frmReghorario" onReset="javascript: limpiar()">
						<input type="hidden" name="txtIdHorario" id="txtIdHorario">

						<!-- *************************************** Registro de Horarios *************************************** -->
						<div class="row"> <div class="col-xs-12"> <legend><h1>Formulario de Registro de Horarios</h1></legend> </div> </div> <?php include('consul.php'); ?>

						<!-- Ciclo, Nivel -->
						<div class="row">
							<!-- Ciclo -->
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label class="control-label">Seleccione Un Ciclo</label>
									<select name="cbociclo" id="cbociclo" class="form-control"> <?php foreach ($ciclo as $row) { echo '<option value="'.$row['id_ciclo'].'">'.$row['nombre_del_ciclo'].'</option>'; } ?> </select>
								</div>
							</div>
							<!-- Nivel -->
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label class="control-label">Seleccione Un Nivel</label>
									<select name="cbonivel" id="cbonivel" class="form-control"> <?php foreach ($subnivel as $row1) { echo '<option value="'.$row1['id_sub_nivel'].'">'.$row1['nombre_del_sub_nivel'].'</option>'; } ?> </select>
								</div>
							</div>
						</div>

						<!-- Dia uno, Dia dos -->
						<div class="row">
							<!-- Día uno -->
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label class="control-label">Seleccione Un Día</label>
									<select name="cbodia" id="cbodia" class="form-control"> <?php foreach ($dia as $row) { echo '<option value="'.$row['id_dia'].'">'.$row['nombre_del_dia'].'</option>'; }  ?> </select>
								</div>
							</div>

							<!-- Día Dos -->
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label class="control-label">Seleccione Un Día</label>
									<select name="cbodiados" id="cbodiados" class="form-control"> <?php foreach ($dia as $row) { echo '<option value="'.$row['id_dia'].'">'.$row['nombre_del_dia'].'</option>'; } ?> </select>
								</div>
							</div>
						</div>
						
						<!-- Hora Inicio, Hora Fin, Enviar -->
						<div class="row">
							<!-- Inicio -->
							<div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label for="inicio" class="control-label">Inicio de la Clase</label>
									<input type="time" name="txtnomInicio" id="txtnomInicio" class="form-control">
								</div>
							</div>
							
							<!-- Fin-->
							<div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label for="inicio" class="control-label">Fin de la Clase</label>
									<input type="time" name="txtnomFin" id="txtnomFin" class="form-control">
								</div>
							</div>
							
							<!-- btnEnviar -->
							<div class="col-xs-12 col-sm-4">
								<label for="nose" class="control-label">Enviar Datos</label>
								<input type="submit" class="form-control btn btn-default" value="Guardar">
							</div>
						</div>
					</form>
				</div>
			</div
>
			<div class="row">
				<div class="col-xs-12">
					<div class="row hidden-print"> 
						<div class="col-xs-12"> 
							<legend>
								<h1>Tabla de Horarios Registrados</h1>
							</legend> 
						</div> 
					</div>
					<p class="btnp hidden-print"> 
						Buscar Sub-Nivel:  
						<input type="text" name="txtBuscar" id="txtBuscar" onKeyUp="buscarHorario(this.value)"> 
						&nbsp &nbsp &nbsp
						<a href="javascript: window.print();" class="btn btn-info">Imprimir</a>
					</p> 
					<div id="RespBusquedaHorario"> <?php include('busquedaHorario.php'); ?> </div>
				</div>

				<?php include('../php/modal.php'); ?>
			</div>
		</div>
		

		<?php include '../inc/footer.inc'; ?>
		<?php include '../inc/footer_common2.inc'; ?>
		<script src="principal.js"></script>
	</body>
</html>