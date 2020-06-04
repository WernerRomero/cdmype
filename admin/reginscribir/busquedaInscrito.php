<div>
	<form name="frmBusquedaInscrito" id="frmBusquedaInscrito">
		<div class="row">
			<div class="col-xs-12">
				<table align="center" cellpadding="5" id="tblInscrito" class="table table-bordered table-condensed">
					<thead>
						<tr>
							<td>N°</td>
							<td>Codigo</td>
							<td>Nombre Completo</td>
							<td>Nivel</td>
							<td>Dia</td>
							<td>Hora</td>
							<td class="hidden-print">Editar</td>
							<td class="hidden-print">Eliminar</td>
						</tr>
					</thead>
					<tbody>
						<?php 
							include('busqIns.php');
							$x=0;
							while($fila = mysqli_fetch_assoc($sql)){
						?>
							<tr id="inscrito_<?php echo $fila['id_inscripcion'] ?>" onClick="modInscrito(<?php echo $fila['id_inscripcion'] ?>)">
								<td width="50" class="hidden"><?php echo $fila['id_sub_nivel']; ?></td>
								<td width="50" class="hidden"><?php echo ucwords($fila['cod_del_cliente']); ?></td>

								<td width="50"><?php echo $x+=1; ?></td>
								<td width="50"><?php echo $fila['cod_del_cliente'] ?></td>
								<td width="250"><?php echo $fila['nombre_cliente'].' '.$fila['apellido_cliente']; ?></td>
								<td width="50"><?php echo $fila['nombre_del_sub_nivel']; ?></td>
								
								<td width="180" > 
									<?php
										include('../php/config/config.php'); 
										$sqldia = mysqli_query($link, "select id_dia, nombre_del_dia from dia where id_dia=".$fila['id_dia2']." "); 
										$dia = mysqli_fetch_all($sqldia, MYSQLI_ASSOC); 
										foreach ($dia as $row) { echo $fila['nombre_del_dia'].' : '.$row['nombre_del_dia']; } 
									?> 
								</td>

								<td width="150"><?php echo $fila['inicio_fin_clase']; ?></td>

								<td width="50" class="hidden-print"><a href="#" class="btn btn-warning" role="button">Editar</a></td>
								<td width="50" class="hidden-print"><a href="javascript: eliminarInscrito(<?php echo $fila['id_inscripcion'] ?>)" class="btn btn-danger" role="button">Borrar</a></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</form>
</div>