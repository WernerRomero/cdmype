<div class="container visible-print borde" id="myDiv"> <!-- visible-print -->
	<div class="row">
		<div class="col-xs-4">
			<img id="logoAIs" src="../../img/logoAI.jpg" alt="Logo Academia Internacional">
		</div>
		<div class="col-xs-8 direccion">
			<label for="Calle">Calle Dr. Federico Penado No. 58 contiguo a Parada de Buses Los Pinos</label><br>
			<label for="usulutan">Usulutan Tel: 2624-9479</label><br>
			<label for="correo">correo electrónico: aeicommunication@gmail.com</label><br>
		</div>
	</div>

	<div class="row">

		<div class="col-xs-4 col-xs-offset-1 codigo">
			<label for="codigofac">
				N° 
				<?php 
					$sqlCantidadFac = mysqli_query($link, "select * from cobro");
					$countCantidadFac=mysqli_num_rows($sqlCantidadFac)+1;
					echo $tipo."-".$countCantidadFac;
				?>
			</label>
		</div>
		<div class="col-xs-7 cantidadnum">
			<label for="por">Por: $______<u><?php echo $cantidad_num; ?></u>______</label>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12 iz">
			<label for="recibi">Recibi de: </label> <label for="cliente" class="font">__________<u><?php echo $recibi; ?></u>__________</label> <br>
			<label for="cantidad">La Cantidad de: </label> <label for="cantidadotext" class="font">__________<u><?php echo $cantidad_text; ?></u>__________</label> <br>
			<label for="raya">_________________________________________________________________</label>
			<label for="concepto">En Concepto de: </label> <label for="concep" class="font">______<u><?php echo $concepto; ?></u>______</label> <br>
			<label for="raya">_________________________________________________________________</label>
			<?php 
				list($anio, $mes, $dia) = split('[/.-]', $fecha);
				$newanio = substr($anio, -2);
			?>
			<label for="fecha" class="font">Usulután﻿, ______<u><?php echo $dia ?></u>______ de, ______<u><?php echo $mes ?></u>______ de 20 ______<u><?php echo $newanio ?></u>______ </label>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-4 col-xs-offset-2">
			<label for="empresa" class="empresa">Academia Internacional</label>
		</div>
		<div class="col-xs-6">
			<label for="firma" class="firma">F: ________________________</label>
		</div>
	</div>
</div>


<div class="container visible-print borde2" id="myDiv"> <!-- visible-print -->
	<div class="row">
		<div class="col-xs-4">
			<img id="logoAIs" src="../../img/logoAI.jpg" alt="Logo Academia Internacional">
		</div>
		<div class="col-xs-8 direccion">
			<label for="Calle">Calle Dr. Federico Penado No. 58 contiguo a Parada de Buses Los Pinos</label><br>
			<label for="usulutan">Usulutan Tel: 2624-9479</label><br>
			<label for="correo">correo electrónico: aeicommunication@gmail.com</label><br>
		</div>
	</div>

	<div class="row">

		<div class="col-xs-4 col-xs-offset-1 codigo">
			<label for="codigofac">
				N° 
				<?php 
					$sqlCantidadFac = mysqli_query($link, "select * from cobro");
					$countCantidadFac=mysqli_num_rows($sqlCantidadFac)+1;
					echo $tipo."-".$countCantidadFac;
				?>
			</label>
		</div>
		<div class="col-xs-7 cantidadnum">
			<label for="por">Por: $______<u><?php echo $cantidad_num; ?></u>______</label>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12 iz">
			<label for="recibi">Recibi de: </label> <label for="cliente" class="font">__________<u><?php echo $recibi; ?></u>__________</label> <br>
			<label for="cantidad">La Cantidad de: </label> <label for="cantidadotext" class="font">__________<u><?php echo $cantidad_text; ?></u>__________</label> <br>
			<label for="raya">_________________________________________________________________</label>
			<label for="concepto">En Concepto de: </label> <label for="concep" class="font">______<u><?php echo $concepto; ?></u>______</label> <br>
			<label for="raya">_________________________________________________________________</label>
			<?php 
				list($anio, $mes, $dia) = split('[/.-]', $fecha);
				$newanio = substr($anio, -2);
			?>
			<label for="fecha" class="font">Usulután﻿, ______<u><?php echo $dia ?></u>______ de, ______<u><?php echo $mes ?></u>______ de 20 ______<u><?php echo $newanio ?></u>______ </label>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-4 col-xs-offset-2">
			<label for="empresa" class="empresa">Academia Internacional</label>
		</div>
		<div class="col-xs-6">
			<label for="firma" class="firma">F: ________________________</label>
		</div>
	</div>
</div>

<script>window.print()</script>