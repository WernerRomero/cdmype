<?php
	session_start();
	include("config.php");

	
	$usuario = strtolower(isset($_POST['txtusername']) ? $_POST['txtusername'] : '');
	$contra = strtolower(isset($_POST['txtpassword']) ? $_POST['txtpassword'] : '');

	if( $usuario && !empty($usuario) && isset($contra) && !empty($contra) ){
		
		$sel = mysqli_query($link, 
				"select username, password, tipo from usuario where username='$usuario' ") or die(mysqli_error($link));

		$session = mysqli_fetch_assoc($sel);

		if($contra==$session['password']){
			if($session['tipo']=="admin"){
				$_SESSION['username']=$_POST['txtusername'];
				header('Location: ../admin');
			}else if ($session['tipo']=="user"){
				//$_SESSION['username']=$_POST['txtusername'];
				
				echo 'iniciastes sesion como user';	
			}else if ($session['tipo']=="docente"){
				//$_SESSION['username']=$_POST['txtusername'];
				
				echo 'iniciastes sesion como docente';	
			}

		}else{
			//echo "<p>Combinacion Erronea</p>";
			header('Location: ../index.php');
		} 
	}else{
		// echo "<p>Debes de llenar ambos Campos</p>";	
		header('Location: ../index.php');
	}
?> 