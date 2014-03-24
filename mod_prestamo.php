<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Modificando Usuario</title>
</head>
<body>
	<?php
/*incluiremos el archivo conexion para poder conectar a la base de datos*/
	include("js/conexion.php");
/*Variables enviadas desde el formulario de registro de usuarios*/
	$cu=$_POST['curp'];
	$co=$_POST['Codigo'];
	$hoy=date("Y-m-d");
	/*Verificamos que las variables no vengan vacias*/	
	if($cu=="" || $co=="" || $hoy ==""){
		echo"Error: Verifique Los Datos";
	}
	else{
	/*insertarmos datos*/
	$modificar_usuario="UPDATE prestamos SET Fecha_devolucion='$hoy' WHERE curp='$cu' AND Codigo='$co'";
	$modificar=mysql_query($modificar_usuario, $conectar) or die("Error: Error con la consulta");
	echo "Se Entrego el Libro";
}
?>	
</body>
</html>