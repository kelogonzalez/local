<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registrando Locales</title>
</head>
<body>
<?php
/*incluiremos el archivo conexion para poder conectar a la base de datos*/
	include("js/conexion.php");
/*Variables enviadas desde el formulario de registro de usuarios*/
	$cedula=$_POST['cedula'];
	$nombres=$_POST['nombres'];
	$ubicacion=$_POST['ubicacion'];
	$ubicacion2=$_POST['ubicacion2'];
	$razon=$_POST['razon'];
	$permiso=$_POST['permiso'];
	$propietario=$_POST['propietario'];
	$valor=$_POST['valor'];
			/*Verificamos que las variables no vengan vacias*/	
	if($cedula=="" || $nombres=="" || $permiso ==""){
		echo"Error: Verifique Los Datos";
	}
	else{
	/*insertarmos datos*/
	$registrar_libro="INSERT INTO registro(cedula,nombres,ubicacion,ubicacion2,razon,permiso,propietario,valor) VALUES('$cedula','$nombres','$ubicacion','$ubicacion2','$razon','$permiso','$propietario','$valor')";
	$registro=mysql_query($registrar_libro, $conectar) or die("El Local se Registro Anteriormente");
	echo "Registro Exitoso";
}
?>
</body>
</html>