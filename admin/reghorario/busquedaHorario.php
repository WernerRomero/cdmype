<div>
	<form name="frmBusquedaHorario" id="frmBusquedaHorario">
		<div class="row">
			<div class="col-xs-12">
				<h2 class="center visible-print">Horario de Clases</h2>
				<table align="center" cellpadding="5" id="tblHorario" class="table table-bordered table-condensed">
					<thead>
						<tr>
							<td>Ciclo</td>
							<td>Nivel</td>
							<td>Sub-Nivel</td>
							<td>Dia Uno</td>
							<td>Dia Dos</td>
							<td>Inicio - Fin</td>
							<td class="hidden-print">Editar</td>
							<td class="hidden-print">Eliminar</td>
						</tr>
					</thead>
					<tbody>
						<?php 
							include('busqhorario.php');

							while($fila = mysqli_fetch_assoc($sql)){
						?>
							<tr id="horario_<?php echo $fila['id_horario'] ?>" onClick="modHorario(<?php echo $fila['id_horario'] ?>)">
								<td width="30" class="hidden"><?php echo $fila['id_ciclo'] ?></td>
								<td width="30" class="hidden"><?php echo $fila['id_sub_nivel'] ?></td>
								<td width="30" class="hidden"><?php echo $fila['id_dia'] ?></td>
								<td width="30" class="hidden"><?php echo $fila['id_dia2'] ?></td>
								
								<td width="200"><?php echo $fila['nombre_del_ciclo'] ?></td>
								<td width="200"><?php echo $fila['nombre_del_nivel']; ?></td>
								<td width="200"><?php echo $fila['nombre_del_sub_nivel']; ?></td>
								<td width="180"><?php echo $fila['nombre_del_dia'] ?></td>
								
								<td width="180" > <?php  include('../php/config/config.php'); 
								$sqldia = mysqli_query($link, "select id_dia, nombre_del_dia from dia where id_dia=".$fila['id_dia2']." "); 
								$dia = mysqli_fetch_all($sqldia, MYSQLI_ASSOC); 
								foreach ($dia as $row) { echo $row['nombre_del_dia']; } ?> </td>

								<td width="150" class="hidden"><?php echo $fila['inicio_clase'] ?></td>
								<td width="150" class="hidden"><?php echo $fila['fin_clase'] ?></td>
								<td width="200"><?php echo $fila['inicio_fin_clase'] ?></td>

								<td width="120" class="hidden-print"><a href="#" class="btn btn-warning" role="button">Editar</a></td>
								<td width="120" class="hidden-print">
									<a href="javascript: eliminarHorario(<?php echo $fila['id_horario'] ?>)" class="btn btn-danger" role="button">Borrar</a>
								</td>
							</tr>
						<?php
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</form>
</div>