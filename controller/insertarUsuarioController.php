<?php

	require_once('../model/usuario.class.php');
	


	
	$nombre= $_REQUEST['nombre'];
	$email= $_REQUEST['email'];
	$pass= $_REQUEST['pass'];
	$apellidos= $_REQUEST['apellidos'];
	$fecha_nacimiento= $_REQUEST['fecha_nacimiento'];
	$pais= $_REQUEST['pais'];
	$provincia= $_REQUEST['provincia'];
	$cp= $_REQUEST['cp'];
	$telefono= $_REQUEST['telefono'];
	


	$usuario = new usuario();

	$usuario->nombre=$nombre;
	$usuario->email=$email;
	$usuario->pass=$pass;
	$usuario->apellidos=$apellidos;
	$usuario->fecha_nacimiento=$fecha_nacimiento;
	$usuario->pais=$pais;
	$usuario->provincia=$provincia;
	$usuario->cp=$cp;
	$usuario->telefono=$telefono;
	

	
		$usuario->insertarUsuario();
	


	



	
	

	



	

?>