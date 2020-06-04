<div class="containerPrint visible-print" id="PrintDiv">
	<div class="row">
		<div class="col-xs-6 img">
			<img id="logoAIs" src="../../img/logoAI.jpg" alt="Logo Academia Internacional">
		</div>
		<div class="col-xs-6 bordedir"><br>
			<label for="Calle">Calle Dr. Federico Penado N# 58,</label><br>
			<label for="los pinos">Contiguo a Parada de Buses Los Pinos,</label>
			<label for="usulutan">Usulutan</label><br>
			<label for="correo">e-mail: aeicommunication@gmail.com</label><br>
			<label for="telefono">Tel: 2624-9479</label>
		</div>
	</div>


	<div class="row hoja">
		<div class="col-xs-12">
			<h3>HOJA DE INSCRIPCIÓN</h3>
		</div>
	</div>

	<div class="contenedorDatos">
		<div class="row">
			<div class="col-xs-3 datos">
				<p>1</p>
			</div>
			<div class="col-xs-9 datosP">
				<p>DATOS PERSONALES</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 nombres">
				<p>APELLIDOS Y NOMBRES</p>
				<p><?php echo ucwords($apellido_cliente).", ".ucwords($nombre_cliente); ?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6 fecha">
				<p>FECHA DE NACIMIENTO</p>
				<p>
					<?php 
						list($anioN, $mesN, $diaN)=split('[/.-]',$fecha_nacimiento_cliente);
						echo $diaN."/ ".$mesN."/ ".$anioN; 
					?>
				</p>
			</div>
			<div class="col-xs-6 edad">
				<p>EDAD</p>
				<p>
					<?php 
						$anio;
						$fecha_nacimiento_cliente;
						$edad=$anio-$anioN;
						echo $edad." años";
					?>
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-7 direccion">
				<p>DIRECCION</p>
				<p><?php echo $direccion_cliente; ?></p>
			</div>
			<div class="col-xs-5 municipio">
				<p>MUNICIPIO</p>
				<p><?php echo $municipio; ?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-4 telCasa">
				<p>TELEFONO DE CASA</p>
				<p><?php echo $tel_clicente; ?></p>
			</div>
			<div class="col-xs-4 cel">
				<p>TELEFONO CELULAR</p>
				<p><?php echo $celular; ?> </p>
			</div>
			<div class="col-xs-4 compania">
				<p>COMPAÑIA CELULAR</p>
				<p>
					<?php 
						
						$sql=mysqli_query($link, "select id_compania, nombre_compania from compania where id_compania='$compania_cliente' ");
						$datosPrint = mysqli_fetch_all($sql, MYSQLI_ASSOC);

						foreach ($datosPrint as $row) {
							echo $row['nombre_compania'];
						}
					?>
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 correo">
				<p>CORREO ELECTRONICO</p>
				<p><?php echo $email_cliente; ?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 instituto">
				<p>INSTITUCION EN DONDE ESTUDIA</p>
				<p><?php echo $instituto_procede; ?></p>
			</div>
		</div>
	</div>

	<div class="contenedorDatos">
		<div class="row">
			<div class="col-xs-3 datos">
				<p>2</p>
			</div>
			<div class="col-xs-9 datosP">
				<p>DATOS DEL PADRE / MADRE (RESPONSABLE)</p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-7 nombreP">
				<p>NOMBRE</p>
				<p><?php echo $nombre_representante; ?></p>
			</div>
			<div class="col-xs-5 parentesco">
				<p>PARENTESCO</p>
				<p><?php echo $parentesco; ?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 lugar">
				<p>LUGAR DE TRABAJO</p>
				<p><?php echo $lugar_trabajo; ?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-4 telCasa">
				<p>TELEFONO DE CASA</p>
				<p><?php echo $tel_casa_repre; ?></p>
			</div>
			<div class="col-xs-4 cel">
				<p>TELEFONO DE TRABAJO</p>
				<p><?php echo $tel_trabajo_repre; ?></p>
			</div>
			<div class="col-xs-4 compania">
				<p>TELEFONO CELULAR</p>
				<p><?php echo $celular_repre; ?></p>
			</div>
		</div>
	</div>

	<div class="row mayor">
		<div class="col-xs-12">
			<p>
				DECLARO bajo mi responsabilidad, que son ciertos cuantos datos que están en la presente hoja de inscripcion.
			</p>
			<p>
				__________________________________
			</p>
			<p>Responsable / Estudiante (Si es mayor de 18 años)</p>
			<p>Fecha de elaboracion de la inscripción: ______/_______/_________</p>
		</div>
	</div>

	<div class="contenedorDatos">
		<div class="row">
			<div class="col-xs-3 datos">
				<p>3</p>
			</div>
			<div class="col-xs-9 datosP">
				<p>ESPACIO RESERVADO PARA ACADEMIA INTERNACIONAL</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-4 telCasa">
				<p>NIVEL</p>
				<p></p>
			</div>
			<div class="col-xs-4 cel">
				<p>HORARIO</p>
				<p></p>
			</div>
			<div class="col-xs-4 compania">
				<p>DIAS</p>
				<p></p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 instituto">
				<p>NOMBRE Y FIRMA DE QUIEN REALIZO LA INSCRIPCION</p>
				<p></p>
			</div>
		</div>
	</div>


</div>

<script>window.print()</script>