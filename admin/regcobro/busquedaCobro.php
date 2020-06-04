<div>
	<form class="hidden-print" name="frmBusquedaCobro" id="frmBusquedaCobro">
		<div class="row">
			<div class="col-xs-12">
				<table align="center" cellpadding="5" id="tblCobro" class="table table-bordered table-condensed">
					<thead>
						<tr>
							<td>N°</td>
							<td>Codigo de Factura</td>
							<td>Codigo Alumno</td>
							<td>Nombre del Alumno</td>
							<td>Fecha de facturacion</td>
							<td>Tipo de factura</td>
							<td>En Concepto de</td>
							<!--td>Editar</td>
							<td>Eliminar</td>
							<td>Imprimir</td-->
						</tr>
					</thead>
					<tbody>
						<?php 
							include('../php/config/config.php');
							$cobro = isset($_POST['cobro']) ? $_POST['cobro'] : '' ;
							$sqlc = mysqli_query($link, "
								select 
									cobro.id_cobro,
									cobro.id_factura,
									cobro.recibi,
									cobro.cantidad_num,
									cobro.cantidad_text,
									cobro.en_concepto_de,
									cobro.cod_cliente,
									cobro.fecha_cobro,
									cobro.cod_cliente,
									cobro.cod_factura,
									cliente.cod_del_cliente,
									cliente.nombre_cliente,
									cliente.apellido_cliente,
									tipo_factura.id_factura,
									tipo_factura.nombre_factura
								from cobro 
									inner join cliente on cobro.cod_cliente = cliente.cod_del_cliente
									inner join tipo_factura on cobro.id_factura=tipo_factura.id_factura
								where cobro.cod_cliente like '%$cobro%' ") or die(mysqli_error($link));
							$x=0;
							while($fila = mysqli_fetch_assoc($sqlc)){
						?> 
							<tr id="cobro_<?php echo $fila['id_cobro'] ?>" > <!-- onClick="modCobro(<?php echo $fila['id_cobro'] ?>)" -->
								<!--td width="50" class="hidden"><?php echo $fila['fecha_cobro'] ?></td>
								<td width="50" class="hidden"><?php echo $fila['id_factura'] ?></td>
								<td width="50" class="hidden"><?php echo $fila['recibi'] ?></td>
								<td width="50" class="hidden"><?php echo $fila['cantidad_num'].','.$fila['cantidad_text'] ?></td>
								<td width="50" class="hidden"><?php echo $fila['en_concepto_de'] ?></td>
								<td width="50" class="hidden"><?php echo $fila['cod_cliente'] ?></td>
								<td width="50" class="hidden"><?php echo $fila['cod_factura'] ?></td-->

								<td width="50"><?php echo $x+=1; ?></td>
								<td width="50"><?php echo $fila['cod_factura'] ?></td>
								<td width="50"><?php echo $fila['cod_cliente'] ?></td>
								<td width="125"><?php echo $fila['nombre_cliente']." ".$fila['apellido_cliente'] ?></td>
								<td width="50"><?php echo $fila['fecha_cobro'] ?></td>
								<td width="75"><?php echo $fila['nombre_factura'] ?></td>
								<td width="125"><?php echo $fila['en_concepto_de'] ?></td>

								<!--td width="50"><a href="#" class="btn btn-warning" role="button">Editar</a></td>
								<td width="50"><a href="javascript: eliminarCobro(<?php echo $fila['id_cobro'] ?>)" class="btn btn-danger" role="button">Borrar</a></td>
								<td width="50"><a href="javascript: imprimirCobro(<?php echo $fila['id_cobro'] ?>)" class="btn btn-info">Imprimir</a></td-->
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</form>
</div>