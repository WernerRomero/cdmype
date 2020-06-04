<div>
	<form class="hidden-print" name="frmBusquedaCliente" id="frmBusquedaCliente">
		<div class="row">
			<div class="col-xs-12">
				<table align="center" cellpadding="5" id="tblCliente" class="table table-bordered table-condensed">
					<thead>
						<tr>
							<td>N°</td>
							<td>Codigo</td>
							<td>Nombre Completo</td>
							<td>Direccion</td>
							<td>Celular</td>
							<td>Compañia</td>
							<td>Trabaja</td>
							<!--td>Editar</td>
							<td>Eliminar</td-->
						</tr>
					</thead>
					<tbody>
						<?php 
							include('../php/config/config.php');
							$cliente = isset($_POST['cliente']) ? $_POST['cliente'] : '' ;
							$sqlc = mysqli_query($link, "select 
															cliente.id_cliente,
															cliente.cod_del_cliente,
														    cliente.fecha_reg,
														    cliente.nombre_cliente,
														    cliente.apellido_cliente,
														    cliente.direccion_cliente,
														    cliente.tel_clicente,
														    cliente.celular,
														    cliente.id_compania,
														    compania.nombre_compania,
														    cliente.fecha_nacimiento_cliente,
														    cliente.email_cliente,
														    cliente.trabajo, 
														    cliente.municipio,
														    cliente.instituto_procede

														from cliente 
															inner join compania on cliente.id_compania = compania.id_compania
														where cod_del_cliente like '%$cliente%' ") or die(mysqli_error($link));

/* 
	select 
															cliente.id_cliente,
															cliente.cod_del_cliente,
														    cliente.fecha_reg,
														    cliente.nombre_cliente,
														    cliente.apellido_cliente,
														    cliente.direccion_cliente,
														    cliente.tel_clicente,
														    cliente.celular,
														    cliente.id_compania,
														    compania.nombre_compania,
														    cliente.fecha_nacimiento_cliente,
														    cliente.email_cliente,
														    cliente.trabajo, 
														    cliente.municipio,
														    cliente.instituto_procede,

														    representante.nombre_repre,
														    representante.parentesco,
														    representante.lugar_trabajo,
														    representante.tel_casa_repre,
														    representante.tel_trabajo_repre,
														    representante.celular_repre,

														    trabajo.lugar_de_trabajo,
														    trabajo.direccion_trabajo,
														    trabajo.cargo_trabajo,
														    trabajo.telefono


														from cliente 
															inner join compania on cliente.id_compania = compania.id_compania
															inner join representante on cliente.id_cliente = representante.id_cliente
															inner join trabajo on cliente.id_cliente = trabajo.id_cliente
														where cod_del_cliente like '%$cliente%' 
*/$x=0;
							while($fila = mysqli_fetch_assoc($sqlc)){
						?>
							<tr id="cliente_<?php echo $fila['id_cliente'] ?>" > <!-- onClick="modCliente(<?php echo $fila['id_cliente'] ?>)" -->
								<td width="50" class="hidden"><?php echo ($fila['fecha_nacimiento_cliente'])?></td>
								<td width="50" class="hidden"><?php echo ($fila['nombre_cliente']) ?></td>
								<td width="50" class="hidden"><?php echo ($fila['apellido_cliente']) ?></td>
								<td width="50" class="hidden"><?php echo ($fila['direccion_cliente']) ?></td>
								<td width="50" class="hidden"><?php echo ($fila['municipio'])?></td>
								<td width="50" class="hidden"><?php echo ($fila['tel_clicente'])?></td>
								<td width="50" class="hidden"><?php echo ($fila['celular'])?></td>
								<td width="50" class="hidden"><?php echo ($fila['id_compania'])?></td>
								<td width="50" class="hidden"><?php echo ($fila['email_cliente'])?></td>
								<td width="50" class="hidden"><?php echo ($fila['instituto_procede'])?></td>

								<!--td width="50" class="hidden"><?php echo ($fila['nombre_repre'])?></td>
								<td width="50" class="hidden"><?php echo ($fila['parentesco'])?></td>
								<td width="50" class="hidden"><?php echo ($fila['lugar_trabajo'])?></td>
								<td width="50" class="hidden"><?php echo ($fila['tel_casa_repre'])?></td>
								<td width="50" class="hidden"><?php echo ($fila['tel_trabajo_repre'])?></td>
								<td width="50" class="hidden"><?php echo ($fila['celular_repre'])?></td>

								<td width="50" class="hidden"><?php echo ($fila['lugar_de_trabajo'])?></td>
								<td width="50" class="hidden"><?php echo ($fila['direccion_trabajo'])?></td>
								<td width="50" class="hidden"><?php echo ($fila['cargo_trabajo'])?></td>
								<td width="50" class="hidden"><?php echo ($fila['telefono'])?></td-->

								<td width="50"><?php echo $x+=1; ?></td>
								<td width="50"><?php echo ($fila['cod_del_cliente'])?></td>
								<td width="50"><?php echo ($fila['nombre_cliente'].' '.$fila['apellido_cliente']) ?></td>
								<td width="50"><?php echo ($fila['direccion_cliente'])?></td>
								<td width="50"><?php echo ($fila['celular'])?></td>
								<td width="50"><?php echo ($fila['nombre_compania'])?></td>
								<td width="50"><?php echo ($fila['trabajo'])?></td>


	
								<!--td width="120"><a href="#" class="btn btn-warning" role="button">Editar</a></td>
								<td width="120"><a href="javascript: eliminarCliente(<?php echo $fila['id_cliente'] ?>)" class="btn btn-danger" role="button">Borrar</a></td-->
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</form>
</div>