<div>
	<!-- javascript: login(); php/verificar.php-->
	<form action="php/verificar.php" name="frmlogin" id="frmlogin" class="form-signin" method="post">
		<div class="row">
			<div class="col-xs-6">
				<h2 class="form-signin-heading">Please Login</h2>
			</div>
			<div class="col-xs-6">
				<div class="cerrar">
		            <a href="javascript: cerrar('#divlogin')">
		                <img src="img/closed.png" alt="Cerrar">
		            </a>
		        </div>
			</div>
		</div>
		<input type="text" class="form-control" name="txtusername" id="txtusername" placeholder="Nombre de Usuario" required="" autofocus="">
		<input type="password" class="form-control" name="txtpassword" id="txtpassword" placeholder="Contraseña" required="" >
		<button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar Sesión</button>
		
		<div id="login"></div>
	</form>
</div>