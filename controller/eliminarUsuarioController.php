<?php
	require_once('../model/usuario.class.php');
	$id = $_REQUEST["id"];

	usuario:: eliminarUsuario($id);

?>