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

	public static function listarUsuarios($pais,$provincia){

		conectarBD();

		if (!empty($pais) && !empty($provincia)){

			$sql = mysql_query("SELECT * FROM Usuarios WHERE pais_usuario = '$pais' AND provincia_usuario = '$provincia'");
			
		}else if(!empty($pais)){

			$sql = mysql_query("SELECT * FROM Usuarios WHERE pais_usuario = '$pais' ");
				
			}else if(!empty($provincia)){
					
				$sql = mysql_query("SELECT * FROM Usuarios WHERE provincia_usuario = '$provincia' ");
			}

		
		cerrarBD();

		return $sql;	
	}	

	public function buscarUsuario($id){

		conectarBD();

		$query = "SELECT * from Usuarios where id_usuario = $id";
		$sql=consulta($query);

		$row=mysql_fetch_array($sql);

		$this->id=$row['id_usuario'];		
		$this->email=$row['email_usuario'];
		$this->pass=$row['pass_usuario'];
		$this->nombre=$row['nombre_usuario'];
		$this->apellidos=$row['apellidos_usuario'];
		$this->fecha_nacimiento=$row['fecha_nacimiento_usuario'];
		$this->pais=$row['pais_usuario'];
		$this->provincia=$row['provincia_usuario'];	
		$this->cp=$row['cp_usuario'];
		$this->telefono=$row['telefono_usuario'];

	}

	public function actualizarUsuario(){
		conectarBD();
		$sql= "UPDATE Usuarios SET nombre_usuario='$this->nombre',email_usuario='$this->email',pass_usuario='$this->pass',apellidos_usuario='$this->apellidos',fecha_nacimiento_usuario='$this->fecha_nacimiento',pass_usuario='$this->pais',provincia_usuario='$this->provincia',cp_usuario='$this->cp',telefono_usuario='$this->telefono' WHERE email_usuario='$this->email' ";		
		insertar($sql);
		cerrarBD();

	}

	public static function eliminarUsuario($id){

		conectarBD();
		$query = "DELETE FROM Usuarios WHERE id_usuario = '$id' ";
		insertar($query);
		cerrarBD();

	}


}	   
?>