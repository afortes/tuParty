<?php
require_once('../model/usuario.class.php');

	$action = $_REQUEST["action"];
	

	if ($action == "buscar"){
		
		$usuario = new usuario();

			$usuario->buscarUsuario($_REQUEST['id']);

		header("Location: ../views/modificarUsuario.php?id=$usuario->id&nombre=$usuario->nombre&email=$usuario->email&pass=$usuario->pass&apellidos=$usuario->apellidos&fecha_nacimiento=$usuario->fecha_nacimiento&pais=$usuario->pais&provincia=$usuario->provincia&cp=$usuario->cp&telefono=$usuario->telefono"); 
 	}

 	if($action == "modificar"){

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
	

	
		$usuario->actualizarUsuario();

 	}

 ?>