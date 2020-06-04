<div>
	<form name="frmBusquedaCiclo" id="frmBusquedaCiclo">
		<div class="row">
			<div class="col-xs-12">
				<table align="center" cellpadding="5" id="tblHorario" class="table table-bordered table-condensed">
					<thead>
						<tr>
							<td>Nombre Factura</td>
							<td>Abreviacion</td>
							<td class="hidden-print">Editar</td>
							<td class="hidden-print">Eliminar</td>
						</tr>
					</thead>
					<tbody>
						<?php 
							include('../php/config/config.php');
							$tfac = isset($_POST['tfac']) ? $_POST['tfac'] : '' ;
							$sqlc = mysqli_query($link, "select * from tipo_factura where abreviacion like '%$tfac%' ") or die(mysqli_error($link));
							while($fila = mysqli_fetch_assoc($sqlc)){
						?>
							<tr id="tfac_<?php echo $fila['id_factura'] ?>" onClick="modTfactura(<?php echo $fila['id_factura'] ?>)">
								<td width="250" ><?php echo $fila['nombre_factura'] ?></td>
								<td width="250" ><?php echo $fila['abreviacion'] ?></td>

								<td width="50" class="hidden-print"><a href="#" class="btn btn-warning" role="button">Editar</a></td>
								<td width="50" class="hidden-print"><a href="javascript: eliminarTfactura(<?php echo $fila['id_factura'] ?>)" class="btn btn-danger" role="button">Borrar</a></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</form>
</div>