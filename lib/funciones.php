<?php

function conectarBD(){
$link=mysql_connect("localhost", "root", "root");

mysql_select_db("BD",$link)
OR DIE (
"Error: No es posible establecer la conexión"
);
}

function consultar(){

   $dbname="BD";
   $tablename="Usuarios";
   $query="SELECT * FROM $tablename;";
   $result=mysql_db_query ($dbname, $query, $link);
   while ($row = mysql_fetch_array ($result))
   {
      print ("<TR>");
      print ("<TD>$row[nombre_usuario]</TD>\n");
      print ("<TD>$row[apellidos_usuario]</TD>\n");
      print ("</TR>");		
    }
    mysql_free_result($result);

}

function cerrarBD(){
  mysql_close($link);
}



function insertarUsuario($nombre,$email,$pass,$apellidos,$fecha_nacimiento,$pais,$provincia,$cp,$telefono){

	
	


  $sql= "INSERT INTO Usuarios(nombre_usuario,email_usuario,pass_usuario,apellidos_usuario,fecha_nacimiento_usuario,pais_usuario,provincia_usuario,cp_usuario,telefono_usuario) VALUES('$nombre','$email','$pass','$apellidos','$fecha_nacimiento','$pais','$provincia','$cp','$telefono')";
  mysql_query($sql);
}
  
?>