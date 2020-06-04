<div>
	<form name="frmBusquedaUsuario" id="frmBusquedaUsuario">
		<div class="row">
			<div class="col-xs-12">
				<table align="center" cellpadding="5" id="tblUsuario" class="table table-bordered table-condensed">
					<thead>
						<tr>
							<td>Nombre Completo</td>
							<td>Usuario</td>
							<td>Contraseña</td>
							<td>Tipo de Usuario</td>
							<td>Editar</td>
							<td>Eliminar</td>
						</tr>
					</thead>
					<tbody>
						<?php 
							include('../php/config/config.php');
							$usuario = isset($_POST['usuario']) ? $_POST['usuario'] : '' ;
							$sqlc = mysqli_query($link, "select 
															id_usuario, 
															nombre, 
															apellido, 
															tipo, 
															username, 
															password 
														from usuario 
														where nombre like '%$usuario%' ") or die(mysqli_error($link));
							while($fila = mysqli_fetch_assoc($sqlc)){
						?>
							<tr id="usuario_<?php echo $fila['id_usuario'] ?>" onClick="modUsuario(<?php echo $fila['id_usuario'] ?>)">
								
								<td width="250"><?php echo ucwords($fila['nombre'].' '.$fila['apellido']) ?></td>
								<td width="250" class="hidden"><?php echo $fila['nombre'] ?></td>
								<td width="250" class="hidden"><?php echo $fila['apellido'] ?></td>
								<td width="200"><?php echo $fila['username'] ?></td>
								<td width="200"><?php echo $fila['password'] ?></td>
								<td width="200"><?php echo $fila['tipo'] ?></td>

								<td width="120"><a href="#" class="btn btn-warning" role="button">Editar</a></td>
								<td width="120"><a href="javascript: eliminarUsuario(<?php echo $fila['id_usuario'] ?>)" class="btn btn-danger" role="button">Borrar</a></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</form>
</div>