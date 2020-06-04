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
					<form action="javascript: registrarInscribir()" name="frmReginscribir" id="frmReginscribir" onReset="javascript: limpiar()">
						<input type="hidden" name="txtIdInscribir" id="txtIdInscribir">
						<!-- *************************************** Registro de Ciclos *************************************** -->
						<div class="row"> <div class="col-xs-12"> <legend><h1>Formulario de Inscripcion a Un Nivel</h1></legend> </div> </div>

						<div class="row">
							<div class="col-xs-12 col-sm-4">
								<label for="Codigo" class="control-label">Codigo del Cliente</label>
								<input type="text" name="txtCodigo" id="txtCodigo" class="form-control" placeholder="AI-0015" required>
							</div>
							<div class="col-xs-12 col-sm-4">
								<label for="Nivel" class="control-label">Nivel</label> <?php include('busqHorario.php'); ?>
								<select name="cboHorario" id="cboHorario" class="form-control"> 
									<?php 
										foreach ($datos as $row) { 
											$sqldia = mysqli_query($link, "select id_dia, nombre_del_dia from dia where id_dia=".$row['id_dia2']." "); $diac = mysqli_fetch_all($sqldia, MYSQLI_ASSOC); 
											foreach ($diac as $rows) { echo '<option value="'.$row['id_sub_nivel'].'">'.$row['nombre_del_nivel'].' > '.$row['nombre_del_sub_nivel'].' : '.$row['nombre_del_dia'].' - '.$rows['nombre_del_dia'].' : '.$row['inicio_fin_clase'].'</option>' ; } 
										} 
									?> 
								</select>
							</div>
							<div class="col-xs-12 col-sm-4">
								<label for="enviar" class="control-label">Enviar Datos</label>
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
							<legend><h1>Tabla de Clientes Inscritos</h1></legend> 
						</div> 
					</div>
					<p class="btnp hidden-print"> 
						Buscar por Nivel: 
						<input type="text" name="txtBuscar" id="txtBuscar" onKeyUp="buscarInscrito(this.value)"> 
						&nbsp &nbsp &nbsp
						<a href="javascript: window.print();" class="btn btn-info">Imprimir</a>
					</p>
					<div id="RespBusquedaInscrito"> <?php include('busquedaInscrito.php'); ?> </div>
				</div>
				<?php include('../php/modal.php'); ?>
			</div>
		</div>

		<?php include '../inc/footer.inc'; ?>
		<?php include '../inc/footer_common2.inc'; ?>
		<script src="principal.js"></script>
	</body>
</html>