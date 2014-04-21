<?php
require_once('../model/usuario.class.php');
	
	

	
	$usuario = new usuario();

	$usuario->buscarUsuario($_REQUEST['id']);



	
	header("Location: ../views/modificarUsuario.php?id=$usuario->id&nombre=$usuario->nombre&email=$usuario->email&pass=$usuario->pass&apellidos=$usuario->apellidos&fecha_nacimiento=$usuario->fecha_nacimiento&pais=$usuario->pais&provincia=$usuario->provincia&cp=$usuario->cp&telefono=$usuario->telefono"); 

	//header("Location:../views/modificarUsuario.php");


?>