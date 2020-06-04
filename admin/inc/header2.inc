<header id="main-header">
	<div class="container hidden-print">
		<div class="row">
			<div class="col-xs-5 col-sm-3">
				<h1 id="main-logo">
					<a href="../../admin"><img src="../../img/logo.jpg" alt="Academia Internacional">
						<span>Academia Internacional</span>
					</a>
				</h1>
			</div>
			<div class="col-xs-7 col-sm-9">
				<ul id="main-menu" class="nav nav-pills hidden-xs">
					<li><a href="../index.php">INICIO</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"> R. ACADEMICO <span class="caret"></span> </a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="../regciclo">REGISTRO CICLOS</a></li>
							<li role="presentation" class="divider"></li>
							<li><a href="../regnivel">REGISTRO NIVELES</a></li>
							<li><a href="../regsubnivel">REGISTRO SUB-NIVELES</a></li>
							<li role="presentation" class="divider"></li>
							<li><a href="../reghorario">REGISTRO HORARIOS</a></li>
						</ul>
					</li>

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"> ARANCELES <span class="caret"></span> </a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="../regcuota">R. PROXIMA CUOTAS</a></li>
							<li role="presentation" class="divider"></li>
							<li><a href="../regtipofactura">R. TIPO DE FACTURA</a></li>
							<li role="presentation" class="divider"></li>
							<li> <a href="../regcobro"><span class="glyphicon glyphicon-usd"></span>&nbsp; COBROS</a> </li>
						</ul>
					</li>

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"> CLIENTE <span class="caret"></span> </a>
						<ul class="dropdown-menu" role="menu">
							<li>
								<a href="../regcliente">
									<span class="glyphicon glyphicon-plus-sign"></span>&nbsp; &nbsp;  
									REGISTRO CLIENTE
								</a>
							</li>
							<li>
								<a href="../reginscribir">
									<span class="glyphicon glyphicon-folder-open"></span>&nbsp; &nbsp; 
									INSCRIBIR
								</a>
							</li>
						</ul>
					</li>

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
							<?php  
								$username = $_SESSION['username'] ;  
								include('../php/usuario.php');  
								foreach ($usuario as $row ) { 
									echo ucwords($row['nombre'].' '.$row['apellido']); 
								} 
							?> 
							<span class="glyphicon glyphicon-user"></span> 
						</a>
						<ul class="dropdown-menu" role="menu">
							<li>
								<a href="../regusuario"> 
									<span class="glyphicon glyphicon-plus"></span> 
									<span class="glyphicon glyphicon-user"></span> &nbsp; &nbsp; 
									NUEVO USUARIO 
								</a>
							</li>
							<li role="presentation" class="divider"></li>
							<li>
								<a href="../php/config/logout.php">
									<span class="glyphicon glyphicon-log-out"></span> &nbsp; &nbsp; 
									Salir
								</a>
							</li>
						</ul>
					</li>
				</ul>

				<a href="#" id="mobile-menu-button" class="btn btn-default visible-xs">
					<span class="glyphicon glyphicon-th-list"></span> 
				</a>
			</div>
		</div>
	</div>
	<div class="visible-xs">
		<ul id="mobile-main-menu">
			<li><a href="../index.php">INICIO</a></li>

			<li><a href="../regciclo">REGISTRO CICLOS</a></li>
			<li><a href="../regnivel">REGISTRO NIVELES</a></li>
			<li><a href="../regsubnivel">REGISTRO SUB-NIVELES</a></li>
			<li><a href="../reghorario">REGISTRO HORARIOS</a></li>

			<li><a href="../regcuota">R. PROXIMA CUOTAS</a></li>
			<li><a href="../regtipofactura">R. TIPO DE FACTORA</a></li>
			<li> <a href="../regcobro"><span class="glyphicon glyphicon-usd"></span>&nbsp; COBROS</a> </li>

			<li><a href="../regcliente"> <span class="glyphicon glyphicon-plus-sign"></span>&nbsp; &nbsp; REGISTRO CLIENTE </a></li>
			<li><a href="../reginscribir"> <span class="glyphicon glyphicon-folder-open"></span>&nbsp; &nbsp; INSCRIBIR </a></li>

			<li><a href="../regusuario"> <span class="glyphicon glyphicon-plus"></span> <span class="glyphicon glyphicon-user"></span> &nbsp; &nbsp; NUEVO USUARIO </a></li>
			<li><a href="../php/config/logout.php"><span class="glyphicon glyphicon-log-out"></span>  &nbsp; &nbsp; Salir</a></li>
		</ul>
	</div>
</header>