<div>
	<form name="frmBusquedaCiclo" id="frmBusquedaCiclo">
		<div class="row">
			<div class="col-xs-12">
				<table align="center" cellpadding="5" id="tblHorario" class="table table-bordered table-condensed">
					<thead>
						<tr>
							<td>Nombre Cuota</td>
							<td>Ciclo</td>
							<td>Fecha</td>
							<td class="hidden-print">Editar</td>
							<td class="hidden-print">Eliminar</td>
						</tr>
					</thead>
					<tbody>
						<?php 
							include('../php/config/config.php');
							$cuota = isset($_POST['cuota']) ? $_POST['cuota'] : '' ;
							$sqlc = mysqli_query($link, "select 
															cuota.id_cuota, 
															cuota.fecha, 
															ciclo.id_ciclo, 
															ciclo.nombre_del_ciclo, 
															cuota.numero_cuota 
														from cuota 
															inner join ciclo on cuota.id_ciclo=ciclo.id_ciclo 
														where numero_cuota like '%$cuota%'") or die(mysqli_error($link));
							while($fila = mysqli_fetch_assoc($sqlc)){
						?>
							<tr id="cuota_<?php echo $fila['id_cuota'] ?>" onClick="modCuota(<?php echo $fila['id_cuota'] ?>)">
								<td width="350" ><?php echo $fila['numero_cuota'] ?></td>
								<td width="50" class="hidden"><?php echo $fila['id_ciclo'] ?></td>
								<td width="350" ><?php echo $fila['nombre_del_ciclo'] ?></td>
								<td width="350" ><?php echo $fila['fecha'] ?></td>

								<td width="50" class="hidden-print"><a href="#" class="btn btn-warning" role="button">Editar</a></td>
								<td width="50" class="hidden-print"><a href="javascript: eliminarCuota(<?php echo $fila['id_cuota'] ?>)" class="btn btn-danger" role="button">Borrar</a></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</form>
</div>