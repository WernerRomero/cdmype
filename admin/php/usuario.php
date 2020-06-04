<?php
	include('config/config.php');
	$sql = mysqli_query($link, " select nombre, apellido, username from usuario where username='$username' ");
	$usuario = mysqli_fetch_all($sql, MYSQLI_ASSOC);
?>