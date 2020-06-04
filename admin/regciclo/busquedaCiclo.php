<div>
	<form name="frmBusquedaCiclo" id="frmBusquedaCiclo">
		<div class="row">
			<div class="col-xs-12">
				<table align="center" cellpadding="5" id="tblHorario" class="table table-bordered table-condensed">
					<thead>
						<tr>
							<td>Nombre del Ciclo</td>
							<td class="hidden-print">Editar</td>
							<td class="hidden-print">Eliminar</td>
						</tr>
					</thead>
					<tbody>
						<?php 
							include('../php/config/config.php');
							$ciclo = isset($_POST['ciclo']) ? $_POST['ciclo'] : '' ;
							$sqlc = mysqli_query($link, "select * from ciclo where nombre_del_ciclo like '%$ciclo%' ") or die(mysqli_error($link));
							while($fila = mysqli_fetch_assoc($sqlc)){
						?>
							<tr id="ciclo_<?php echo $fila['id_ciclo'] ?>" onClick="modCiclo(<?php echo $fila['id_ciclo'] ?>)">
								<td width="250"><?php echo $fila['nombre_del_ciclo'] ?></td>
								<td width="50" class="hidden-print"><a href="#" class="btn btn-warning" role="button">Editar</a></td>
								<td width="50" class="hidden-print"><a href="javascript: eliminarCiclo(<?php echo $fila['id_ciclo'] ?>)" class="btn btn-danger" role="button">Borrar</a></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</form>
</div>