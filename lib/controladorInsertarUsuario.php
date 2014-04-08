<?php
include("funciones.php"); 


/*Coge los datos que llegan de insertarUsuario.html, abre la base de datos inserta los datos y cierra la BD*/

	conectarBD();


	$nombre= $_GET['nombre'];
	$email= $_GET['email'];
	$pass= $_GET['pass'];
	$apellidos= $_GET['apellidos'];
	$fecha_nacimiento= $_GET['fecha_nacimiento'];
	$pais= $_GET['pais'];
	$provincia= $_GET['provincia'];
	$cp= $_GET['cp'];
	$telefono= $_GET['telefono'];


	insertarUsuario($nombre,$email,$pass,$apellidos,$fecha_nacimiento,$pais,$provincia,$cp,$telefono);

	cerrarBD();





 ?>