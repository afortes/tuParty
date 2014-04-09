<?php	

/* Libreria para el manejo de la Base de datos */


	/* Funcion que conecta a la BD */
	function conectarBD(){
		

		$link=mysql_connect("localhost", "root", "root")
		 OR DIE ("Conexión a la Base de datos no realizada");
		
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
	function consulta($sql)
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

	function insertar($sql){

	 	mysql_query($sql);

	 }
	 /*FUNCIóN QUE NOS PERMITE VER SI UN SQL TIENE ALGO
	 	TRUE si tiene.
	 	Falso si no.
	 	Nos permite comprobar el sql para ver si hay campos repetidos */

	function repetido($sql){
	 	
	 	if( mysql_num_rows($sql) > 0 ){
	 		return true;
	 	}else{
	 		return false;
	 	}

	 }



	/* Cierra la BD */
	function cerrarBD(){
  		mysql_close($link);
	}


?>