<div>
	<form name="frmBusquedaNivel" id="frmBusquedaNivel">
		<div class="row">
			<div class="col-xs-12">
				<table align="center" cellpadding="5" id="tblHorario" class="table table-bordered table-condensed">
					<thead>
						<tr>
							<td>Nombre del Nivel</td>
							<td class="hidden-print">Editar</td>
							<td class="hidden-print">Eliminar</td>
						</tr>
					</thead>
					<tbody>
						<?php 
							include('../php/config/config.php');
							$nivel = isset($_POST['nivel']) ? $_POST['nivel'] : '' ; 
							$sql = mysqli_query($link, "select * from nivel where nombre_del_nivel like '%$nivel%' ") or die(mysqli_error($link));
							while($fila = mysqli_fetch_assoc($sql)){
						?>
							<tr id="nivel_<?php echo $fila['id_nivel'] ?>" onClick="modNivel(<?php echo $fila['id_nivel'] ?>)">
								<td width="250"><?php echo $fila['nombre_del_nivel'] ?></td>
								<td width="50" class="hidden-print"><a href="#" class="btn btn-warning" role="button">Editar</a></td>
								<td width="50" class="hidden-print"><a href="javascript: eliminarNivel(<?php echo $fila['id_nivel'] ?>)" class="btn btn-danger" role="button">Borrar</a></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</form>
</div>