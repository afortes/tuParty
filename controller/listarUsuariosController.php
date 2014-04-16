<?php

	require_once('../model/usuario.class.php');
	

	$sql= usuario::listarUsuarios();
	
	
	header("Location: ../views/listarUsuarios.php"); 
	




?>