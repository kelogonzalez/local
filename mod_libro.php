<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html" />
<title>Modificando Local Comercial</title>
</head>
<body>
	<?php
/*incluiremos el archivo conexion para poder conectar a la base de datos*/
	include("js/conexion.php");
/*Variables enviadas desde el formulario de registro de usuarios*/
	$id=$_POST['id'];
	$cedula=$_POST['cedula'];
	$nombres=$_POST['nombres'];
	$ubicacion=$_POST['ubicacion'];
	$ubicacion2=$_POST['ubicacion2'];
	$razon=$_POST['razon'];
	$permiso=$_POST['permiso'];
	$propietario=$_POST['propietario'];
	$valor=$_POST['valor'];
	/*Verificamos que las variables no vengan vacias*/	
	if($cedula=="" || $nombres=="" || $permiso ==""|| $razon==""){
		echo"Error: Verifique Los Datos";
	}
	else{
	/*insertarmos datos*/
	$modificar_usuario="UPDATE registro SET cedula='$cedula', nombres='$nombres', ubicacion='$ubicacion', ubicacion2='$ubicacion2', razon='$razon', permiso='$permiso', propietario='$propietario', valor='$valor' WHERE id='$id'";
	$modificar=mysql_query($modificar_usuario, $conectar) or die("Error: Error con la consulta");
	echo "Se Guardaron Cambios";
}
?>	
</body>
</html>