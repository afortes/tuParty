<?php
require_once('../model/usuario.class.php');
	
	

	
	$usuario = new usuario();

	$usuario->buscarUsuario($_REQUEST['id']);




	
	//header("Location: ../views/modificarUsuario.php?id='.$usuario->id.'&nombre='.usuario->nombre"); 

	header("Location:../views/modificarUsuario.php");


?>