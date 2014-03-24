<?php
include("js/conexion.php");
mysql_query("DELETE FROM libros WHERE Autor=". $_REQUEST["nom"] .";",$conectar);
if (mysql_errno()!=0) 
{
	echo "No se pudo eliminar el registro. Error ". mysql_errno() . " - " . mysql_error();
	mysql_close($conectar);
} else {
mysql_close($conectar);
header("Location:index.php");


}




?>