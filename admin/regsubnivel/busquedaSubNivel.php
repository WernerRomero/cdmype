<div>
	<form name="frmBusquedaSubNivel" id="frmBusquedaSubNivel">
		<div class="row">
			<div class="col-xs-12">
				<table align="center" cellpadding="5" id="tblHorario" class="table table-bordered table-condensed">
					<thead>
						<tr>
							<td>Nombre del Nivel</td>
							<td>Nombre del Sub-Nivel</td>
							<td class="hidden-print">Editar</td>
							<td class="hidden-print">Eliminar</td>
						</tr>
					</thead>
					<tbody>
						<?php 
							include('../php/config/config.php');
							$subnivel = isset($_POST['subnivel']) ? $_POST['subnivel'] : '' ;
							$sql = mysqli_query($link, "select 
															nivel.id_nivel, 
															sub_nivel.id_sub_nivel, 
															nivel.nombre_del_nivel, 
															sub_nivel.nombre_del_sub_nivel 
														from sub_nivel 
															inner join nivel on sub_nivel.id_nivel=nivel.id_nivel 
														where nombre_del_sub_nivel like '%$subnivel%' ") or die(mysqli_error($link));
							while($fila = mysqli_fetch_assoc($sql)){
						?>
							<tr id="subnivel_<?php echo $fila['id_sub_nivel'] ?>" onClick="modSubNivel(<?php echo $fila['id_sub_nivel'] ?>)">
								<td width="50" class="hidden"><?php echo $fila['id_nivel']; ?></td>
								<td width="250"><?php echo $fila['nombre_del_nivel']; ?></td>
								<td width="250"><?php echo $fila['nombre_del_sub_nivel']; ?></td>
								<td width="50" class="hidden-print"><a href="#" class="btn btn-warning" role="button">Editar</a></td>
								<td width="50" class="hidden-print"><a href="javascript: eliminarSubNivel(<?php echo $fila['id_sub_nivel'] ?>)" class="btn btn-danger" role="button">Borrar</a></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</form>
</div>