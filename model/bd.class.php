<?php	

/* Clase para el manejo de la Base de datos */


class bd 
{
	/* Funcion que conecta a la BD */
	public function conectarBD(){
		echo "bd";

		$link=mysql_connect("localhost", "root", "root") OR DIE ("SIN CONECTAR");
		mysql_select_db("BD",$link)
		OR DIE (
		"Error: No es posible establecer la conexión"
		);
	}

	/* METODO PARA REALIZAR UNA CONSULTA 
	 INPUT:
	 $sql | codigo sql para ejecutar la consulta
	 OUTPUT: $result
	 */
	 public function consulta($sql)
	 {
	    $resultado = mysql_query($sql,$this->conexion);
	    if(!$resultado){
	     echo 'MySQL Error: ' . mysql_error();
	     exit;
	    }
	    return $resultado;
	 }
	 /*METODO PARA CONTAR EL NUMERO DE RESULTADOS
	 INPUT: $result
	 OUTPUT: cantidad de registros encontrados
	 */
	 function numero_de_filas($result){
	  if(!is_resource($result)) return false;
	  return mysql_num_rows($result);
	 }

	 /*METODO PARA CREAR ARRAY DESDE UNA CONSULTA
	 INPUT: $result
	 OUTPUT: array con los resultados de una consulta
	 */
	 function fetch_assoc($result){
	  if(!is_resource($result)) return false;
	   return mysql_fetch_assoc($result);
	 }

	 public function insertar($sql){

	 	mysql_query($sql);

	 }



	/* Cierra la BD */
	public function cerrarBD(){
  		mysql_close($link);
	}
}

?>