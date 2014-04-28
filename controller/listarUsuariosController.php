<?php
require_once('../model/usuario.class.php');
	
	/* Este controlador se encarga del manejo del filtro de listar usuarios. */
	
	
	$pais= $_REQUEST['pais'];
	$provincia= $_REQUEST['provincia'];
	

	
	



	
	header("Location: ../views/listarUsuarios.php?pais=$pais&provincia=$provincia"); 

	


?>