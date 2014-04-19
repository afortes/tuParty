<?php

require_once ('../model/bd.php');


/* CLASE Usuario */

class usuario {

	var $nombre;
	var $email;
	var $pass;
	var $apellidos;
	var $fecha_nacimiento;
	var $pais;
	var $provincia;
	var $cp;
	var $telefono;


	function __construct ($nombre,$email,$pass,$apellidos,$fecha_nacimiento,$pais,$provincia,$cp,$telefono){
		$this->nombre=$nombre;
		$this->email=$email;
		$this->pass=$pass;
		$this->apellidos=$apellidos;
		$this->fecha_nacimiento=$fecha_nacimiento;
		$this->pais=$pais;
		$this->provincia=$provincia;
		$this->cp=$cp;
		$this->telefono=$telefono;

		
	}
	


	/*Inserta un nuevo usuario validando antes que no haya usuarios repetidos*/
	
	public function insertarUsuario(){

		if($this->comprobarUsuarioRepetido()){
			echo "El usuario ya esta dado de alta en la base de datos";
		}else{
		
		conectarBD();
		$sql= "INSERT INTO Usuarios(nombre_usuario,email_usuario,pass_usuario,apellidos_usuario,fecha_nacimiento_usuario,pais_usuario,provincia_usuario,cp_usuario,telefono_usuario) VALUES('$this->nombre','$this->email','$this->pass','$this->apellidos','$this->fecha_nacimiento','$this->pais','$this->provincia','$this->cp','$this->telefono')";		
		insertar($sql);
		cerrarBD();

		}

	}

	/*Valida que un usuario no este ya dado de alta mirando si ya existe el email en la BD. 
		True: El usuario ya existe.
		False: El usuario no existe.*/

	public function comprobarUsuarioRepetido(){

		conectarBD();
		$sql = mysql_query("SELECT * from Usuarios where email_usuario = '$this->email'");
		if (repetido($sql)){			
			return true;

		}else{			
			return false;
		}
		cerrarBD();
	}

	public static function listarUsuarios(){

		conectarBD();

		$sql = mysql_query("SELECT * FROM `Usuarios` ");
		

		

		

		return $sql;
		
	}


}
	   


?>